@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Edit Relasi </h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('relations.update', $relation->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">DIAGNOSA</label>
                            <select class="form-select form-control @error('disease_id') is-invalid @enderror" name="disease_id"  required aria-label="Default select example">
                                <option selected>Pilih Diagnosa</option>
                                @foreach ( $disease as $dis )
                                @if (old('disease_id', $relation->disease_id) == $dis->id)
                                <option value="{{ $dis->id }}" selected> {{$dis->name_disease}}</option>
                                @else
                                <option value="{{ $dis->id }}"> {{$dis->name_disease}}</option>
                                @endif
                                @endforeach
                              </select>
                            <!-- error message untuk title -->
                            @error('disease_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">GEJALA</label>
                            <select  class="form-select form-control @error('symptom_id') is-invalid @enderror" name="symptom_id"   aria-label="Default select example">
                                <option selected>Pilih Gejala</option>
                                @foreach ( $symptom as $sym )
                                @if (old('symptom_id', $relation->symptom_id) == $sym->id)
                                <option value="{{ $sym->id }}" selected> {{$sym->name_symptom}}</option>
                                @else
                                <option value="{{ $sym->id }}"> {{$sym->name_symptom}}</option>
                                @endif
                                @endforeach
                              </select>
                            <!-- error message untuk title -->
                            @error('symptom_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <a href="{{ route('relations.index'); }}" type="button" class="btn btn-md btn-warning">BACK</a>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@stop
