@extends('templates.template')
@section('content')
  
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
            <a href="/diagnosis"
              class="text-base text-center font-semibold  text-white outline outline-offset-0 outline-cyan-400  bg-cyan-400 py-2 rounded-full px-8 mb-2 hover:shadow-lg hover:opacity-80 hover:text-blue-500 mr-5 ">Get
              Stared</a>
            <a href="/basis-pengetahuan"
              class="text-base text-center font-semibold  text-cyan-400 outline outline-offset-0 outline-cyan-400  py-2 rounded-full px-8 mb-2 hover:shadow-lg hover:opacity-80 hover:text-blue-500 transition duration-700 ease-in-out ">Learn
              More</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative  flex ">
              <img src="img/Humaaans3.png" class=" w-1/2 rounded-xl border-gray-100 border-2 drop-shadow-2xl translate-x-6 ">
              <img src="img/Humaaans1.png" class=" w-1/2 ml-2 rounded-xl border-gray-100 border-2 drop-shadow-2xl -translate-y-6 -translate-x-6">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section -->
  
    <!-- service -->
    <section id="about" class="pt-36 bg-white ">
      <div class="container mx-auto">
        <div class="w-full px-4">
          <div class="">
            <h4 class="font-semibold text-2xl text-black ">About</h4>
          </div>
        </div>
        <div class="w-full px-2 flex flex-wrap justify-center  ">
          <div class="row flex">
            <div class="col-sm-5">
               <img src="{{ asset('img/Humaaans.png') }}"  class="card-img-top" style="max-width:400px; " alt="...">
              {{-- <img src="img/Humaaans.png" class=" w-1/2 ml-2 rounded-xl border-gray-100 border-2 drop-shadow-2xl -translate-y-6 -translate-x-6"> --}}

            </div>
            <div class="col-sm-7">
              <p><small>Stres kerja merupakan interaksi antara seseorang dengan situasi lingkunganatau stresor yang dianggap mengancam atau menantang, dan menimbulkangangguan psikologis, fisiologis, perilaku, dan gangguan pada organisasi. Luthans(2006) mendefiniskan stres kerja sebagai respons adaptif terhadap situasi
                eksternal yang menghasilkan penyimpangan fisik, psikologis, dan atau perilakupada anggota organisasi. Robbins (2006) mendefinisikan stres kerja sebagai
                kondisi dinamik yang di dalamnya individu menghadapi peluang, kendala, atautuntutan yang terkait dengan apa yang sangat diinginkan dan yang hasilnyadipersepsikan sebagai tidak pasti tetapi penting. Stres menunjukkan suatu kondisi
                dinamika di mana seorang individu dikonfrontasikan dengan suatu peluang, kendala, atau tuntutan yang dikaitkan dengan apa yang diinginkan danyanghasilnya dipersepsikan sebagai hal yang tidak pasti. Ivancevich dan Matteson (dalam Luthans, 2006) mendefinisikan stres kerjasebagai respon adaptif yang dihubungkan oleh perbedaan individu dan prosespsikologi yang merupakan konsekuensi tindakan, situasi, atau kejadian eksternal
                (lingkungan) yang menempatkan tuntutan psikologis dan atau fisik secaraberlebihan pada seseorang. Gibson et al, (1989) mendefinisikan stres kerja sebagai
                suatu tanggapan adaptif, ditengahi oleh perbedaan individual dan proses</small></p>
            </div>
            </div>
          </div>
      </div>
    </section>
    <!-- service -->
    <!-- service -->
    <section id="services" class="pt-36 bg-neutral-600 ">
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
@endsection