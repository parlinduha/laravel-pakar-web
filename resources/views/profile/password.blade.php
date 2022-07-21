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
              <div class="col-sm-8 border">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link "  href="{{route('profile')}}" aria-current="page" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link "  href="{{route('profile_update')}}" aria-current="page" href="#">Update Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{route('profile_password')}}" aria-current="page" href="#">Password</a>
                  </li>
                </ul>
                
                <div id="updateUser" class="mt-3">
                    <form method="POST" action="{{route('updatePassword')}}">
                        @method('patch')
                        @csrf
                        <div class="form-group row my-2">
                            <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>
                        
                            <div class="col-md-6">
                                <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current_password">
                        
                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="form-group row my-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
    
                        <div class="form-group row my-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
      </div>
    </section>
    <!-- games -->
    @include('sweetalert::alert')
@endsection