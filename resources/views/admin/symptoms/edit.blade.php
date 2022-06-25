@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Tambah Gejala Page</h1>
@stop

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('symptoms.update', $symptom->id) }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Gejala</label>
                            <input type="text" class="form-control @error('name_symptom') is-invalid @enderror" name="name_symptom" value="{{ old('name_symptom', $symptom->name_symptom) }}" placeholder="Masukkan Nama Gejala">
                        
                            <!-- error message untuk content -->
                            @error('name_symptom')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <a href="{{ route('symptoms.index'); }}" type="button" class="btn btn-md btn-warning">BACK</a>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
