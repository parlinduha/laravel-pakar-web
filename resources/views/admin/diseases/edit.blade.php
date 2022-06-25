@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Tambah Diagnosa Page</h1>
@stop

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('diseases.update', $disease->id) }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold">NAMA DIAGNOSA</label>
                            <input type="text" class="form-control @error('name_disease') is-invalid @enderror" name="name_disease" value="{{ old('name_disease', $disease->name_disease) }}" placeholder="Masukkan Nama Diagnosa">
                        
                            <!-- error message untuk content -->
                            @error('name_disease')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">SOLUSI</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Solusi">{{ old('description', $disease->description) }}</textarea>
                        
                            <!-- error message untuk content -->
                            @error('description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <a href="{{ route('diseases.index'); }}" type="button" class="btn btn-md btn-warning">BACK</a>

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
