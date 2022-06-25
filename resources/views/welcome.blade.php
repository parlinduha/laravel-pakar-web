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
</head>
<body>
    <!-- Header -->
    <header  class="bg-transparent   navbar-fixed top-0 left-0 w-full flex items-center z-10">
      <div class="container mx-auto">
        <div class="flex items-center  justify-between relative">
          <div class="px-4">
            <a href="#home" class=" font-weight-bold text-xl text-gray-900 block py-6  "><strong>App e-Pakar</strong></a></b></h1>
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
                  <a href="#home" class="text-base text-black py-2 mx-8 flex group-hover:text-blue-500">Home</a>
                </li>
                <li class="group">
                  <a href="#services" class="text-base text-black py-2 mx-8 flex group-hover:text-blue-500">About</a>
                </li>
                <li class="group">
                  <a href="#games" class="text-base text-black py-2 mx-8 flex group-hover:text-blue-500">Test</a>
                </li>
                <li class="group">
                  <a href="#home" class="text-base text-black py-2 mx-8 flex group-hover:text-blue-500">Basis Pengetahuan</a>
                </li>
                <li class="group">
                  <a href="#home" class="text-base text-black py-2 mx-8 flex group-hover:text-blue-500">Contact</a>
                </li>
                @if (Route::has('login'))
                <li class="group ">
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
  
    <!-- Hero Section -->
    <section id="home" class="pt-36 ">
      <div class="container mx-auto">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4  lg:w-1/2 ">
            <h4 class="text-gray-600">Halo {{Auth::user()->name}} </h4>
            <h1 class="text-4xl decoration-solid decoration-cyan-400 "><b>Lakukan diagnosa sekarang ? </b></h1>
            <hr class="bg-cyan-400 w-36   mt-2 pt-1 ">
            <p class="text-gray-500 leading-relaxed mb-10">Kami menyediakan jutaan cara untuk membantu <br> karyawan
              menjadi pemenang lebih produktif</p>
            <a href="#"
              class="text-base text-center font-semibold  text-white outline outline-offset-0 outline-cyan-400  bg-cyan-400 py-2 rounded-full px-8 mb-2 hover:shadow-lg hover:opacity-80 hover:text-blue-500 mr-5 ">Get
              Stared</a>
            <a href="#games"
              class="text-base text-center font-semibold  text-cyan-400 outline outline-offset-0 outline-cyan-400  py-2 rounded-full px-8 mb-2 hover:shadow-lg hover:opacity-80 hover:text-blue-500 transition duration-700 ease-in-out ">Learn
              More</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative  flex ">
              <img src="img/imp3.jpg" class=" w-1/2 rounded-xl border-gray-100 border-2 drop-shadow-2xl translate-x-6 ">
              <img src="img/imp2.jpg" class=" w-1/2 ml-2 rounded-xl border-gray-100 border-2 drop-shadow-2xl -translate-y-6 -translate-x-6">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section -->
  
    <!-- service -->
    <section id="services" class="pt-36 bg-white ">
      <div class="container mx-auto">
        <div class="w-full px-4">
          <div class="max-w-xs mx-auto text-center ">
            <h4 class="font-semibold text-2xl text-black ">Basis Pengetahuan</h4>
          </div>
        </div>
        <div class="w-full px-2 flex flex-wrap justify-center  ">
            <div class=" p-4 lg:w-1/3 ">
              <div class="rounded-md h-5\/6 bg-gray-200 shadow-md overflow-hidden  ">
                <div class="m-5  ">
                  <h4 class="text-2xl text-semibold">1. Start</h4>
                  <p class="text-gray-500 text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, tempore.</p>
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/3">
              <div class="rounded-md h-5\/6 bg-gray-200 shadow-md overflow-hidden ">
                <div class="  m-5  ">
                  <h4 class="text-2xl text-semibold">2. Play</h4>
                  <p class="text-gray-500 text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, tempore.</p>
                </div>
              </div>
            </div>
            <div class=" p-4 lg:w-1/3">
              <div class="rounded-md h-5\/6 bg-gray-200 shadow-md overflow-hidden  ">
                <div class="  m-5  ">
                  <h4 class="text-2xl text-semibold">3. Winner</h4>
                  <p class="text-gray-500 text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, tempore.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- service -->
  
    <!-- games -->
    <section id="games" class="pt-36 pb-16 ">
      <div class="container mx-auto">
        <div class="w-full">
          <div class="max-w-xl ml-6 bg-blue-600  mb-16">
            <h4 class="font-semibold text-2xl text-black ">Kategori Stres Kerja</h4>
          </div>
        </div>
        <div class="w-full px-2 flex flex-wrap justify-center  ">
          <div class=" p-4 lg:w-1/3 ">
            <div class="rounded-md h-5\/6 bg-gray-200 shadow-md overflow-hidden  ">
              <div class="m-5  ">
                <h4 class="text-2xl text-semibold">Stres Rendah</h4>
                <p class="text-gray-500 text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, tempore.</p>
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/3">
            <div class="rounded-md h-5\/6 bg-gray-200 shadow-md overflow-hidden ">
              <div class="  m-5  ">
                <h4 class="text-2xl text-semibold">Stres Sedang</h4>
                <p class="text-gray-500 text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, tempore.</p>
              </div>
            </div>
          </div>
          <div class=" p-4 lg:w-1/3">
            <div class="rounded-md h-5\/6 bg-gray-200 shadow-md overflow-hidden  ">
              <div class="  m-5  ">
                <h4 class="text-2xl text-semibold">Stres Tinggi</h4>
                <p class="text-gray-500 text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, tempore.</p>
              </div>
            </div>
          </div>
      </div>
      </div>
    </section>
    <!-- games -->

    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
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
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
    ></script>
      
  </body>
</html>