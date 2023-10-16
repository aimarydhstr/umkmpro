@extends('layouts.app')
@section('content')

<!-- NAVBAR  -->

<nav div id="accordion-open" data-accordion="open">
    <form class="flex px-8 sm:px-12 py-4 items-center relative justify-between">

        <div class="text-2xl font-semibold flex items-end">
            
            <h2 class="block sm:hidden" id="accordion-open-heading-3 ">
                <button type="button" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                    <svg data-accordion-icon class="w-7 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"></path>
                    </svg>
                </button>
            </h2>

            <a href="" class="text-blue-700">U</span>M<span class="text-blue-700">K</span>M<span class="text-blue-700 text-3xl">Pro</a>
        </div>

        <div class="absolute w-2/3 h-10 hidden" id="accordion-open-body-5" aria-labelledby="accordion-open-heading-5">
        <div class="relative">
            <input name="search" type="text" class="w-full py-2.5 bg-gray-200 rounded-md pl-10" placeholder="Search ...">
                <svg class="absolute h-5 top-1/2 -translate-y-1/2 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#777">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>

        <div class="flex-1 sm:block hidden">
            <div class="relative mx-16">
                <input name="search" type="text" class="w-full py-2.5 bg-gray-200 rounded-md pl-10" placeholder="Search ...">
                <svg class="absolute h-5 top-1/2 -translate-y-1/2 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#777">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>

        <div class="flex">
            <a href="{{route('cart')}}" class="mr-2 w-6 h-6" title="Cart">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </a>
            <a href="{{route('wishlist')}}" class="px-lg-1 pl-lg-2 px-2" title="Wishlist">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </a>
            
            <h2 id="accordion-open-heading-3">
                <button type="button" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
                    <svg class="sm:hidden flex ml-2 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
            </h2>
            </button>
        </div>
</form>

    
    <div id="accordion-open-body-3" class="hidden sm:block sm:shadow-none shadow-lg" aria-labelledby="accordion-open-heading-3">
        <div class="mt-2 mb-3 sm:flex-row flex-col flex justify-between px-12 divide-y divide-gray-100 z-40 bg-white ">    
        <div class="flex sm:flex-row flex-col items-center font-medium sm:space-x-5 space-x-0">
            <a href="{{route('shop')}}#" class="text-black py-2 hover:bg-gray-100  px-3 rounded-md">
                Home
            </a>
            <a href="{{route('shop')}}#category" class="text-gray-600 hover:text-black py-2 hover:bg-gray-100  px-3 rounded-md">
                Kategori
            </a>
            <a href="{{route('shop')}}#cupon" class="text-gray-600 hover:text-black  hover:bg-gray-100 py-2 px-3 rounded-md">
                Kupon Promo
            </a>
            <a href="{{route('shop')}}#produk" class="text-gray-600 hover:text-black py-2 hover:bg-gray-100  px-3 rounded-md">
                Produk Baru
            </a>
        </div>
    

        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center font-medium text-black hover:bg-gray-100 py-2 px-3 rounded-md focus:shadow-lg focus:ring-gray-600 justify-center">
            <img src="" class="border rounded-full" width="30" height="30">
            <span class="mx-2"></span>
            <svg class="w-5 h-5 pt-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
            </svg>
        </button>

        <div id="dropdown" class="z-40 hidden bg-white divide-y divide-gray-100 rounded-lg  w-44 shadow-lg">
            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="{{route('shop.profile')}}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
              </li>
              <li>
                <a href="{{route('shop.transaction')}}" class="block px-4 py-2 hover:bg-gray-100">Transaksi</a>
              </li>
              <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="block px-4 py-2 hover:bg-gray-100">Logout</button>
                    </form>
              </li>
            </ul>
        </div>
    </div>
</div>
</nav>



<!-- HEADER TOKO -->

<section class="px-4 sm:ps-12">

    <div class="w-full border rounded-lg p-2.5">
        <div class="flex justify-between pl-0 sm:pl-5">
            <div class="flex space-x-2 items-center">
                <div style="background-image: url()" class="w-20 h-20 border-4 border-blue-400 rounded-full bg-cover bg-center"></div>

                <div>
                    <p class="font-bold text-xl">
                        Hanan Store's
                    </p>
                    <p class="mb-1">
                        Kab. Tangerang
                    </p>
                    <div class="flex space-x-2">
                        <div class="flex flex-col sm:flex-row space-y-1 sm:space-y-0 space-x-0 sm:space-x-2">
                            

                            <a href="" class="whitespace-nowrap flex items-center bg-blue-500 text-white font-medium pr-3 pl-2.5 py-1.5 rounded-md hover:bg-blue-600 focus:ring">
                                <svg class="w-5 mr-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"></path>
                                </svg>
                                Hubungi Penjual
                            </a>


                            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button" class="whitespace-nowrap flex items-center border border-blue-500 text-blue-600 font-medium pr-3 pl-2.5 py-1.5 rounded-md hover:bg-blue-50 focus:ring">
                            <svg class="w-5 mr-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                            </svg>
                                Informasi Toko
                            </button>

                    </div>

                        <button class="py-1.5 px-3 border rounded-md border-blue-500 text-blue-600 hover:bg-blue-50 focus:ring">
                            <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


<!-- INFO TOKO -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full shadow-xl">
    <div class="relative w-full max-w-2xl max-h-full shadow-xl">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    <p>
                        [Nama Toko]
                    </p>
                    <div class="flex text-sm">
                    <svg class="w-4 mr-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                    </svg>
                        Tangerang
                    </div>
                    <div class="flex text-sm">
                    <svg class="w-4 mr-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"></path>
                    </svg>
                        Buka Sejak : djajkdhjkasdhk
                    </div>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="flex">
                    <div class="">
                        <h1 class="font-bold">Deskripsi</h1>
                        <p>
                            Deskripsi lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi qui quisquam iure. Nisi nobis repudiandae sunt deserunt, labore quae vitae inventore! Molestiae harum ex recusandae deleniti quaerat placeat natus aliquid?
                        </p>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
            </div>
        </div>
    </div>
</div>


            <div class="flex items-center space-x-5 pr-0 sm:pr-5 pl-0 sm:pl-5">
                <div class="text-center">
                    <div class="flex items-center w-fit mx-auto">
                        <svg class="sm:w-7 w-5 text-yellow-600" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <span class="font-semibold text-lg sm:text-xl">
                            5.0
                        </span>
                    </div>
                    <p class="text-sm text-gray-500">Rating & Ulasan</p>
                </div>

                <div class="h-2/3 border-r-2"></div>

                <div class="flex space-x-1 items-center">
                    <p class="text-3xl font-semibold">90</p>
                    <div class="-space-y-2 text-gray-500 sm:text-md text-sm">
                        <p>Produk</p>
                        <p>Terjual</p>
                    </div>
                    <svg class="w-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                    </svg>
                </div>
            </div>

        </div>
    </div>


</section>

<div class="px-4 sm:px-12 mt-5 border-t border-b w-full py-2">
    <label class="text-gray-500 cursor-pointer font-bold text-lg pb-2 px-4 border-0 hover:border-b-4 border-gray-400">
        Beranda
    </label>

    <label class="text-blue-500 cursor-pointer font-bold text-lg pb-2 px-4 border-b-4 border-blue-400">
        Katalog Produk
    </label>
</div>

<div class="py-5 bg-blue-200 px-8 sm:px-20 flex justify-center space-x-3">
    <a href="" class="p-3 bg-blue-600 rounded-md text-blue-50 hover:bg-blue-50 hover:text-blue-500 transition-all">
    <svg class="h-8 mx-auto mb-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
    </svg>
    <span>
        Elektronik
    </span>
    </a>

    <a href="" class="p-3 bg-blue-600 rounded-md text-blue-50 hover:bg-blue-50 hover:text-blue-500 transition-all">
    <svg class="h-8 mx-auto mb-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
    </svg>
    <span>
        Elektronik
    </span>
    </a>
</div>


<div class="mt-5 px-8 sm:px-20">
    <div class="w-full grid place-items-center grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">

        <div class="shadow-md w-full rounded-md space-y-2">
            <div style="background-image: url();" class="border bg-cover bg-center h-48 rounded"></div>
            <div class="font-semibold text-gray-700">
                Nama Produk
            </div>
            
            <div class="text-xl font-bold mb-1">
                Rp 99.000
            </div>

            <div class="flex items-center">
                <span class="px-3 py-0.5 bg-blue-500 font-bold text-white rounded mr-1 text-xs">
                    1%
                </span>
                <p class="text-xs line-through">
                    Rp.100.000
                </p>
            </div>

            <div class="flex items-center justify-between pb-2">
                    <div class="flex">
                        <svg class="w-6 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        5.0
                    </div>
                    <div class="text-blue-600">
                        Tersisa 9
                    </div>
                </div>

        </div>
    </div>
</div>







  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

@endsection