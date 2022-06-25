@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Post Page</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
               <div class="col-md-4 col-md-offset-4 text-center">
                <form action="{{ route('student.save') }}" method="post">
                    @csrf
                    <h4>Add New Student</h4>
                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
               </div>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/sb-1.3.3/sp-2.0.1/datatables.min.css"/>
 
    
    @stop
    
    @section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/sb-1.3.3/sp-2.0.1/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

    {{-- //message with toastr --}}
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif

@stop
