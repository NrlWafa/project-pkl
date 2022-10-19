@extends('layout')

@section('content')

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
                            <input type="text" class="form-control" placeholder="NIK" value="{{ $profile->nik }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="{{ $profile->name }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Jenis Kelamin</label>
                            <select id="inputState" class="form-control">
                                <option selected="selected">Pilih Jenis Kelamin</option>
                                <option @if($profile->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                <option @if($profile->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" value="{{ $profile->tgl_lahir }}"><span class="input-group-append"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input">
                            <label class="custom-file-label">Pilih Photo Profile</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="#"><button type="submit" class="btn btn-danger">Batal</button></a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection