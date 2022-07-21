@extends('templates.template')

@section('content')
      <!-- games -->
    <section id="games" class="pt-30 pb-16 ">
      <div class="container mx-auto">
        <div class="w-full">
          <div class="max-w-xl ml-6 bg-blue-600  mb-16">
            <h4 class="font-semibold text-2xl text-black ">Profile User</h4>
          </div>
        </div>
        <div class="row">
              <div class="col-sm-4">
                <div class="card" style="width: 25rem; background-color:cornflowerblue">
                  <div class="img-profile mt-5">
                    @if(Auth::user()->avatar)
                        <img class="user-image img-circle elevation-2" src="{{asset('/storage/profile/'.Auth::user()->avatar)}}" alt="profile_image">
                    @endif
                </div>
                  <div class="card-body">
                    <h4 class="card-title text-center "><b>{{ Auth::user()->name }}</b></h4>
                    <hr>
                    <form action="{{route('save_profile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="avatar" class="btn btn-sm btn-outline-secondary form-control" style="background-color:white">
                            <input class="btn btn-sm btn-primary" type="submit" value="save" id="button-addon2">
                        </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 border mb-5">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link " href="/profile" aria-current="page" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/profile/update" aria-current="page" href="#">Update Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('profile_password')}}" aria-current="page" href="#">Password</a>
                  </li>
                </ul>
                
                <div id="updateUser" class="mt-5">
                    <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-sm col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control  @error('name')is-invalid @enderror" value="{{ old('name', Auth::user()->name) }}" placeholder="Fullname">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nip" class="col-sm col-form-label">ID Pegawai</label>
                            <div class="col-sm-10">
                                <input type="text" disabled name="nik" class="form-control  @error('nik')is-invalid @enderror" value="{{ old('nik', Auth::user()->nik) }}" placeholder="Masukan ID Karyawan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="text" name="email" class="form-control  @error('email')is-invalid @enderror" value="{{ old('email', Auth::user()->email) }}" placeholder="example@example.com">
                            </div>
                        </div> 
                        <button type="submit" class="btn btn-primary mt-5">Update profile</button>
                      </form>
                </div>
              </div>
            </div>
      </div>
    </section>
    <!-- games -->
    @include('sweetalert::alert')
@endsection