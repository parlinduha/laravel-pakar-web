@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Relasi Forward Chaining</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('relations.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">DIAGNOSA</label>
                            <select class="form-select form-control @error('disease_id') is-invalid @enderror" name="disease_id"  aria-label="Default select example">
                                <option selected>Pilih Diagnosa</option>
                                @foreach ( $disease as $dis )
                                <option value={{$dis->id}}> {{$dis->name_disease}}</option>
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
                            <select  class="form-select form-control @error('symptom_id') is-invalid @enderror" name="symptom_id"  aria-label="Default select example">
                                <option selected>Pilih Gejala</option>
                                @foreach ( $symptom as $sym )
                                <option value={{$sym->id}}> {{$sym->code_symptom}} {{$sym->name_symptom}}</option>
                                @endforeach
                              </select>
                            <!-- error message untuk title -->
                            @error('symptom_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                        </div>

                        {{-- <table class="table table-bordered table-striped">
                            <thead>
                                <th width="50px"><input type="checkbox" id="master"></th>
                                <th width="150px">Kode Gejala</th>
                                <th>Gejala</th>
                            </thead>
                            <tbody>
                                @foreach ($symptom as $item)
                               <tr>
                                <td><input type="checkbox" value="{{$item->id}}"></td>
                                <td>{{$item->code_symptom}} <br> </td>
                                <td>{{$item->name_symptom}}</td>
                               </tr>
                                @endforeach
                            </tbody>     
                        </table> --}}



                        {{-- <div class="card">
                            <div class="card-header">
                                Pilih Gejala
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    @foreach ($symptom as $item)
                                        <input class="form-check-input" type="checkbox" name="symptom_id[]" value="{{$item->id}}" @checked(old('symptom_id', $item->id))>
                                        <label class="form-check-label">
                                            {{$item->code_symptom}}  {{$item->name_symptom}}
                                        </label><br>
                                    @endforeach
                                    
                                  </div>
                            </div>
                        </div> --}}

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
