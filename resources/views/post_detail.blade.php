@extends('templates.template')

@section('content')
      <!-- games -->
    <section id="games" class="pt-36 pb-16 ">
      <div class="container mx-auto">
        <div class="w-full">
          <div class="max-w-xl ml-6 bg-blue-600  mb-16">
            <h4 class="font-semibold text-2xl text-black ">Basis Pengetahuan</h4>
          </div>
        </div>
        <div class="row">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ Storage::url('public/posts/').$basis_pengetahuan->image }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>{{$basis_pengetahuan->title}}</strong></h5>
                  <div class="flex mb-3">
                    <small class="text-muted ">{{$basis_pengetahuan->created_at}}</small> 
                    <small class="card-text mx-5"><strong>Kategori :</strong> {{$basis_pengetahuan->disease->name_disease}}</small>
                  </div>
                  <p class="card-text">{{$basis_pengetahuan->content}}</p>
                  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- games -->
@endsection

