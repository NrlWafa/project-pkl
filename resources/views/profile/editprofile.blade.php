@extends('layout')

@section('content')

<!-- Custom Stylesheet -->
<link href="/theme/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
<!-- Page plugins css -->
<link href="/theme/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<!-- Color picker plugins css -->
<link href="/theme/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="/theme/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<!-- Daterange picker plugins css -->
<link href="/theme/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="/theme/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<div class="col-lg-12">
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="card-title">Edit Profile</h4>
            <div class="basic-form">
                <form method="POST">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK" value="{{ $profile->nik }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $profile->name }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Jenis Kelamin</label>
                            <select id="inputState" class="form-control" name="jk">
                                <option selected="selected">Pilih Jenis Kelamin</option>
                                <option @if($profile->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                <option @if($profile->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 form-material">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tl" placeholder="Tanggal lahir" id="mdate" value="{{ $profile->tgl_lahir }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Usia</label>
                            <input type="text" class="form-control" name="usia" placeholder="Usia" value="{{ $profile->usia }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $profile->email }}">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="photo">
                            <label class="custom-file-label">Pilih Photo Profile</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="submit" class="btn btn-danger">Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="/theme/plugins/moment/moment.js"></script>
<script src="/theme/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="/theme/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="/theme/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="/theme/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="/theme/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="/theme/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="/theme/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="/theme/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="/theme/js/plugins-init/form-pickers-init.js"></script>

@endsection
