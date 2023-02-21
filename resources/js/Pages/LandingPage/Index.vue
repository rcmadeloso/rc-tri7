<template>

<nav class="tri7-header-dark-blue border-gray-200 pt-2.5">
  <div class="container flex flex-wrap items-center justify-between mx-auto py-3">
    <a href="https://flowbite.com/" class="flex items-center">
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white mr-4">KONGSI</span>
        <img src="/assets/ole777-white.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
        
    </a>


    <div class="md:block hidden">
        <button class="text-white bg-orange-500 mr-2 px-2 py-1 rounded-md">Login</button>
        <button class="text-white bg-gray-500 mr-2 px-2 py-1 rounded-md">Daftar sekarang</button>
    </div>


    <button @click="toggleNav()" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-gray-100 hover:text-black focus:outline-none " aria-controls="navbar-default" aria-expanded="false">


      <span class="sr-only">Open main menu</span>
      <svg v-if="toggleMobileNav == true" class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>

        <svg v-if="toggleMobileNav == false" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>

    </button>


    <div class="w-full md:hidden md:w-auto" :class="{ 'hidden': toggleMobileNav }" id="navbar-default">
      <ul class="flex flex-col  tri7-header-menu md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
        <li class="border-b border-gray-100 border-opacity-25">
          <a href="#" class="block text-sm py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">Tentang OLE777</a>
        </li>
        <li class="border-b border-gray-100 border-opacity-25">
          <a href="#" class="block text-sm py-2 pl-3 pr-4 text-white rounded hover:bg-blue-900 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Komisi</a>
        </li>
        <li class="border-b border-gray-100 border-opacity-25">
          <a href="#" class="block text-sm py-2 pl-3 pr-4 text-white rounded hover:bg-blue-900 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Peraturan</a>
        </li>
        <li class="border-b border-gray-100 border-opacity-25">
          <a href="#" class="block text-sm py-2 pl-3 pr-4 text-white rounded hover:bg-blue-900 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Pertanyaan & Jawaban</a>
        </li>
        <li class="border-b border-gray-100 border-opacity-25">
          <a href="#" class="block text-sm py-2 pl-3 pr-4 text-white rounded hover:bg-blue-900 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Kontak</a>
        </li>
        <li class="border-b border-gray-100 border-opacity-25">
          <a href="#" class="block text-sm py-2 pl-3 pr-4 text-yellow-500 font-bold rounded hover:bg-blue-900 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">OLE777 Official</a>
        </li>

        <li class="border-b border-gray-100 border-opacity-25">
          <a href="#" class="block text-sm py-2 pl-3 pr-4 text-white rounded hover:bg-blue-900 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Login</a>
        </li>

        <li class="border-b border-gray-100 border-opacity-25">
          <a href="#" class="block text-sm py-2 pl-3 pr-4 text-white rounded hover:bg-blue-900 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Daftar sekarang</a>
        </li>

      </ul>
    </div>

  </div>

    <div class="py-1 hidden md:flex w-full tri7-header-menu text-white flex justify-between font-bold">
        <div></div>

        <div class="px-2 py-1 text-yellow-600">
            Tentang OLE777
        </div>
        <div class="px-2 py-1">
            Komisi
        </div>
        <div class="px-2 py-1">
            Peraturan
        </div>
        <div class="px-2 py-1">
            Pertanyaan & Jawaban
        </div>
        <div class="bg-yellow-600 text-black px-2 py-1">
            OLE777 Official
        </div>

        <div></div>

    </div>

</nav>


<div class="w-full items-center md:block hidden">
    <img class="w-full" :src="slides[currentSlide].img" >

    <div class="w-full  flex justify-center mt-4">
        <div v-for="(slide, index) in slides">
            <button class="h-2 w-2 mx-1 mt-2 rounded-full bg-yellow-500 focus:outline-none hover:bg-gray-500" :class="{'bg-gray-700': currentSlide === index}" @click="currentSlide = index"></button>
        </div>

    </div>
</div>

<div class="flex justify-center mx-auto w-full px-10 md:h-screen -mt-">
  
  <div class="bg-gray-200 p-4">
    <div class="flex justify-between mt-2 overflow-x-scroll md:overflow-x-hidden space-x-4">
        <img src="/assets/img-cta-3.jpg" class="md:w-1/3  rounded-lg">
        <img src="/assets/img-cta-2.jpg" class="md:w-1/3  rounded-lg">
        <img src="/assets/img-cta-1.jpg" class="md:w-1/3  rounded-lg">
    </div>

    <div class="flex justify-center mt-2 overflow-x-scroll md:overflow-x-hidden">
      <div class="text-black p-4 w-full ">
        <p><strong>Kongsi OLE777</strong> adalah program OLE777 Affiliate bola yang memberikan member dan non-member penghasilan dengan platform OLE777.</p>
        <p>Berdini sejak tahun 201, OLE777 memberikan hiburan online dengan kenyamanan, kualitas produk, layanan, pelanggan terbaik, dan keuntungan bagi untuk seluruh player, dan anggota Kongsi OLE777 Affliate Bola.</p>

        <p class="mt-4 font-bold">Langkah-langkah mendapatkan komisi dengan menjadi Kongsi OLE777</p>
        <p class="items-center mt-2">
            <span class="px-2 py-1 bg-orange-400 text-white">1</span>
        Daftar dengan klik tombol " Daftar Sekarang" atau melalui yang diberikan oleh tim kami.
        </p>
        <p class="items-center mt-2">
            <span class="px-2 py-1 bg-orange-400 text-white">2</span>
        Lakukan Pendaftaran
        </p>
        <p class="items-center mt-2">
            <span class="px-2 py-1 bg-orange-400 text-white">3</span>
        Senarkan link khusus yang Anda dapat dari akan Anda.
        </p>
        <p class="items-center mt-2">
            <span class="px-2 py-1 bg-orange-400 text-white">4</span>
        Anda bisa menyebarkan link melalui akun-akun Sosial Media Anda, seperti Facebook, INstagram, Youtube, Twitter, dan lain-lain.
        </p>
      </div>
    </div>


    <div class="flex mt-12 w-full">

        <div class="grid grid-cols-2 md:grid-cols-4 md:gap-20 w-full">

          <div>
            <div class="flex justify-center items-center">
              <img src="/assets/img-group.svg" class=" px-4 md:m-2 m-4 md:w-28 md:h-28  rounded-lg">
            </div>
            <div class="flex justify-center items-center">
              <p class="text-center text-xl text-blue-900 font-semibold">Tim Pembayaran yang Profesional</p>
            </div>
            <div class="flex text-center items-center text-sm"> Metode pembayaran beragam dan terpercaya. Setiap dana pemian aman dan terjamin. </div>
          </div>

          <div >

            <div class="flex justify-center items-center">
              <img src="/assets/img-domino.svg" class="inline-flex justify-center px-4 md:m-2 m-4 md:w-28 md:h-28  rounded-lg">
            </div>

            <div class="flex justify-center items-center">
              <p class="text-center text-xl text-blue-900 font-semibold">Brand yang Terkenal</p>              
            </div>

            <div class="flex text-center items-center text-sm">
              Anggaran pemarasan yang luar biasa. Biarkan Anda menikmati efek dari merek berkualitas
            </div>
          
          </div>


          <div >

            <div class="flex justify-center items-center">
              <img src="/assets/img-document.svg" class="inline-flex justify-center px-4 md:m-2 m-4 md:w-28 md:h-28  rounded-lg">
            </div>

            <div class="flex justify-center items-center">
              <p class="text-center text-xl text-blue-900 font-semibold">Sistem Laporan Profesional</p>              
            </div>

            <div class="flex text-center items-center text-sm">
            Format pelaporan yang rapi & bersih. Lihat laporan harian & bulanan di satu titik
            </div>
          
          </div>

          <div >

            <div class="flex justify-center items-center">
              <img src="/assets/img-settings.svg" class="inline-flex justify-center px-4 md:m-2 m-4 md:w-28 md:h-28  rounded-lg">
            </div>

            <div class="flex justify-center items-center">
              <p class="text-center text-xl text-blue-900 font-semibold">Personalisasikan Paket Pribadi</p>              
            </div>

            <div class="flex text-center items-center text-sm">
            Kami dapat menyesuaikan promosi khusus untuk Anda. Membuat promosi Anda menjadi Mudah
            </div>
          
          </div>


        </div>

    </div>

  </div>

</div>



<div class="shadow md:flex md:items-center md:justify-between mt-10">
  <div class="w-full flex justify-center">
    <img src="/assets/Sticker WhatsApp Gratis - Kongsi OLE777.gif" class="w-full md:w-3/4 h-32">
  </div>  
</div>

<div class="hidden shadow md:flex md:items-center md:justify-between ">
  <div class="w-full flex justify-center tri7-header-menu py-4 px-10 space-x-10">
    <div class="inline-flex items-center">
      <img src="/assets/icon-skype.svg" class="mr-2">
      <span class="text-white">Pelayanan Pelanggan Skype: <span class="text-yellow-600">affiliasi.id@oleintl.com</span></span>
    </div>

    <div class="inline-flex items-center">
      <img src="/assets/icon-email.svg" class="mr-2">
      <span class="text-white">Email: <span class="text-yellow-600">affiliatebola.id@ole777-indo.com</span></span>
    </div>

    <div class="inline-flex items-center">
      <img src="/assets/icon-whatsapp.svg" class="mr-2">
      <span class="text-white">Whatsapp: <span class="text-yellow-600">+6287807264445</span></span>
    </div>

  </div>  
</div>


<footer class="p-4 shadow md:flex md:items-center md:justify-between md:p-6 tri7-header-dark-blue">

  <div class="w-full flex justify-center  px-10 space-x-10">
    <div class="inline-flex items-center">
      <img src="/assets/logo-chelsea.svg" class="mr-2">
    </div>

    <div class="inline-flex items-center">
      <img src="/assets/logo-pagcor.png" class="mr-2">
    </div>

    <div class="inline-flex items-center">
      <img src="/assets/logo-iom.png" class="mr-2">
    </div>

    <div class="inline-flex items-center">
      <img src="/assets/ole777-white.png" class="mr-2">
    </div>

  </div> 

</footer>



</template>

<script>
    export default {
      props:['slides_data'],
      data() {
        return {
          toggleMobileNav: true,
          currentSlide: 0,
          slides: this.slides_data
        };
      },
      methods: {
        toggleNav() {
          this.toggleMobileNav = !this.toggleMobileNav;
        },
      },
    };
</script>

<style>
    
/* hide scrollbar arrow for webkit browsers */
::-webkit-scrollbar {
  width: 6px;
  height: 6px;
}

::-webkit-scrollbar-thumb {
/*  background-color: ;*/
  border-radius: 3px;
}

::-webkit-scrollbar-thumb:hover {
/*  background-color: #555;*/
}

::-webkit-scrollbar-track {
/*  background-color: #f5f5f5;*/
  border-radius: 3px;
}

::-webkit-scrollbar-track:hover {
/*  background-color: #f0f0f0;*/
}


</style>