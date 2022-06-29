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
                <div class="card" style="width: 18rem;">
                  <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 border">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#updateUser" aria-current="page" href="#">Update Profile</a>
                  </li>
                </ul>
                
                <div id="updateUser" class="mt-3">
                  <form method="POST" action="{{ route('profile.update') }} >
                    @method('PUT')

                    @csrf

                    <div class="mb-2">
                      <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                      <input type="text"  value="{{ old('name', $user->name)}}" name="name" @error('name')  is-invalid @enderror class="form-control" id="exampleFormControlInput1" placeholder="Full name">
                    </div>
                    {{-- <div class="mb-2">
                      <label for="exampleFormControlInput1" class="form-label">ID Employee</label>
                      <input type="number" class="form-control" value="{{ old('name', $user->name)}}" name="name" @error('name')  is-invalid @enderror placeholder="1234567890">
                    </div> --}}
                    <div class="mb-2">
                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                      <input type="email" class="form-control" value="{{ old('email', $user->email)}}" name="email" @error('email')  is-invalid @enderror placeholder="name@example.com">
                    </div>
                    {{-- <div class="mb-2">
                      <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                      <input type="file" class="form-control" >
                    </div> --}}
                    {{-- <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">About As</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                  </form>
                </div>
              </div>
            </div>
      </div>
    </section>
    <!-- games -->
@endsection