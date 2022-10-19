@extends('layout')

@section('content')

    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-2">{{ $profile->name }}</h5>
              <p class="text-muted mb-3">{{ $profile->nik }}</p>
              <div class="d-flex justify-content-center mb-2">
                <a href="/editprofile"><button type="button" class="btn btn-primary">Edit Profile</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-2">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">NIK</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profile->nik }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Lengkap</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profile->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Jenis Kelamin</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profile->jenis_kelamin }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tanggal Lahir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profile->tgl_lahir }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Usia</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profile->usia }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $profile->email }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection