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
                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped table-hover">
                            <thead>
                              <tr>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">CREATE AT</th>
                                <th scope="col">UPDATE AT</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>{{ $user->created_at}}</td>
                                    <td>{{ $user->update_at}}</td>
                                    <td class="text-center">
                                            <button type="submit" class="mt-2 btn btn-sm btn-danger">HAPUS</button>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                    </div>
                      {{-- {{ $users->links() }} --}}
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
