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
            @forelse ( $posts as $post )
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ Storage::url('public/posts/').$post->image }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><a href="{{ route('basis-pengetahuan.show', $post->id) }}">{{$post->title}}</a></h5>
                      Kategori :
                      <a href="#" class="ml-5 card-text">{{$post->disease->name_disease}}</a>
                      <p class="card-text">{{  Str::limit($post->content, 100) }}</p>
                      <div class="flex">
                          <p class="card-text ml-5"><small class="text-muted">{{$post->created_at}}</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @empty
            <div class="card text-center">
                {{-- <img src="{{ asset('img/Humaaans.png') }}"  class="card-img-top" style="max-width:400px; " alt="..."> --}}
                <div class="card-body mb-6">
                  <h5 class="card-title">Postingan belum tersedia</h5>
                  <p class="card-text">Silahkan kembali dihalaman lainnya.</p>
                  <a href="/" class="btn btn-primary">Kembali</a>
                </div>
            @endforelse
        </div>
      </div>
    </section>
    <!-- games -->
@endsection

