<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Font Awesome -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
  />
  <!-- MDB -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
  />
   <!-- datatable style -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
   <!-- bootstrap 4 css  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
       integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body style="background-color: silver">
    <header  class="bg-transparent   navbar-fixed top-0 left-0 w-full flex items-center z-10">
        <div class="container mx-auto">
          <div class="flex items-center  justify-between relative">
            <div class="px-4">
              <a href="/" class=" font-weight-bold text-xl text-gray-900 block py-6  "><strong>
                <img src="{{ asset('vendor/adminlte/dist/img/Logo.png') }}"  class="card-img-top"  style="max-width:40px;" alt="Logo">    
            </strong></a></b></h1>
            </div>
            <div class="flex items-center px-4">
              <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden ">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left "></span>
                <span class="hamburger-line transition duration-300 ease-in-out "></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left "></span>
              </button>
              <nav id="nav-menu"
                class="hidden absolute PY-5 mt-4  max-w-[250px] w-full right-4 top-full lg:block md:bg-slate-400 sm:bg-slate-400 lg:static  lg:max-w-full lg:shadow-none lg:rounded-none ">
                <ul class="block lg:flex">
                  <li class="group">
                    <a href="/" class="text-base text-black py-2 mx-7 flex group-hover:text-blue-500">Home</a>
                  </li>
                  <li class="group">
                    <a href="#about" class="text-base text-black py-2 mx-8 flex group-hover:text-blue-500">About</a>
                  </li>
                  <li class="group">
                    <a href="/diagnosis" class="text-base text-black py-2 mx-7 flex group-hover:text-blue-500">Test</a>
                  </li>
                  <li class="group">
                    <a href="/basis-pengetahuan" class="text-base text-black py-2 mx-8 flex group-hover:text-blue-500">Basis Pengetahuan</a>
                  </li>
                  
                  <li class="group ">
                    {{-- <li class="group text-base text-black py-2 mx-8 flex group-hover:text-blue-500"> --}}
                      {{-- <svg class="mx-1 " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                      {{ Auth::user()->name }}  --}}
                      <a href="/profile" class="text-base text-black py-2 mx-8 flex group-hover:text-blue-500">Profile</a>
                    </li>

                    <li class="group ">
                    @if (Route::has('login')) 
                    @auth
                    
                      <a class=" dark:text-gray-500 underline block text-base text-center font-semibold  text-white bg-slate-500 py-2 rounded-full px-8 mb-2 hover:shadow-lg hover:opacity-80 group-hover:text-blue-500" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
  
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                      {{-- <a href="{{ url('logout') }}" class=" dark:text-gray-500 underline block text-base text-center font-semibold  text-white bg-slate-500 py-2 rounded-full px-8 mb-2 hover:shadow-lg hover:opacity-80 group-hover:text-blue-500 ">Logout</a> --}}
                  @else
                      <a href="{{ route('login') }}" class=" dark:text-gray-500 underline block text-base text-center font-semibold  text-white bg-slate-500 py-2 rounded-full px-8 mb-2 hover:shadow-lg hover:opacity-80 group-hover:text-blue-500 ">Log in</a>
                  @endauth
                  </li>
                  @endif
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- Header -->
    @yield('content')

    <footer class="bg-dark text-center text-white w-full">
        <!-- Grid container -->
        <div class="container  p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
      
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          &copy Copyright  <script>document.write(new Date().getFullYear())</script>
          <a class="text-white" href="/"> By Blessing</a>
        </div>
        <!-- Copyright -->
      </footer>
    
      <script src="js/script.js"></script>
    
      <!-- MDB -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
       <!-- script tambahan  -->
     <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js">
     </script>
 
     <!-- fungsi datatable -->
     <script>
         $(document).ready(function () {
             $('#myTable').DataTable({
              dom: 'Bfrtip',
                 buttons: [
                     'copy', 'csv', 'excel', 'pdf', 'print'
                 ]
             })
         });
 
     </script>
    
  </body>
</html>