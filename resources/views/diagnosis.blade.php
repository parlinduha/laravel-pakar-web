@extends('templates.template')

@section('content')
      <!-- games -->
    <section id="games" class="pt-36 pb-16 ">
      <div class="container mx-auto">
        <div class="w-full">
          <div class="max-w-xl ml-6 bg-blue-600  mb-16">
            <h4 class="font-semibold text-2xl text-black ">Dignosa Test Kerja</h4>
          </div>
        </div>
        <div class="w-full px-2 flex flex-wrap justify-center  ">
          <form action="">

            <table id="myTable" class="table responsive table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th><input type="checkbox"></th>
                  <th>Kode</th>
                  <th>Nama Gejala </th>
                </tr>
              </thead> 
              <tbody>
                @foreach ($relations as $relation)
                <tr>
                  <td><input type="checkbox"></td>
                  <td>{{ $relation->symptom->code_symptom }}</td>
                  <td>{{ $relation->symptom->name_symptom }}</td>
                </tr>
                  @endforeach
              </tbody> 
            </table>
          </form>
      </div>
      </div>
    </section>
    <!-- games -->
@endsection
