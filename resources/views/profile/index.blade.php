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
                    <a class="nav-link active" href="/profile" aria-current="page" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/profile/update" aria-current="page" href="#">Update Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="profile/password" aria-current="page" href="#">Password</a>
                  </li>
                </ul>
                
                <div id="updateUser" class="mt-3">
                  <form method="POST" >

                    <div class="mb-2">
                      <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                      <input type="text" disabled value="{{$user->name}}"   name="name" @error('name')  is-invalid @enderror class="form-control" id="exampleFormControlInput1" placeholder="Full name">
                    </div>
                    <div class="mb-2">
                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                      <input type="email" class="form-control" disabled value="{{ Auth::user()->email }}"  name="email" @error('email')  is-invalid @enderror placeholder="name@example.com">
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