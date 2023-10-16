<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKMPro | {{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>

     
<nav>
    <div class="flex px-8 sm:px-12 py-4 items-center relative justify-between">

        <a class="text-2xl font-semibold">
            <span class="text-blue-700">U</span>M<span class="text-blue-700">K</span>M<span class="text-blue-700 text-3xl">Pro</span>
        </a>

        

        

        <div id="navbar-search" class="flex-1 absolute sm:relative z-40 -left-5">
            <div class="relative mx-16">
                <input type="text" class="w-full py-2.5 bg-gray-200 rounded-md pl-10" placeholder="Search ...">
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
            
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false">
                <svg class="sm:hidden flex ml-2 h-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </button>
        </div>
    </div>

    <div  class="mt-2 mb-3 sm:flex-row flex-col flex justify-between px-12 divide-y divide-gray-100 z-40 bg-white ">
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
            <img src="{{ asset('/img/user/'.$auth->photo) }}" class="border rounded-full" width="30" height="30">
            <span class="mx-2">{{ $auth->name }}</span>
            <svg class="w-5 h-5 pt-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
            </svg>
        </button>
        <div id="dropdown" class="z-40 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 shadow-lg">
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
</nav>



  

    <section class="w-full flex flex-col lg:flex-row">
        <!-- KIRI -->
        <div class="lg:w-1/3 w-full h-fit block sm:sticky top-0 z-30 bg-white">

        <div class="px-3 py-2 max-w-md mx-auto">

            <div class="p-2 bg-blue-600 rounded-lg relative">
                <p class="absolute z-40 left-1/2 -translate-x-1/2 top-0 bg-blue-600 px-5 py-1 font-bold text-white rounded-b-2xl">UMKMPro</p>
            
            <div id="default-carousel" class="relative w-full" data-carousel="static">
                <div class="relative h-72 overflow-hidden rounded-lg md:h-96">
                <div style="background-image: url({{asset('/img/product/'.$product->image)}});" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-center bg-cover"></div>
                </div>
            </div>
        </div>
        </div>


        </div>

        
        
        
        <!-- TENGAH -->
        <div class="flex-1 flex relative flex-col lg:flex-row">
        <div class="mx-2 flex-1" id="indicators-carousel" data-carousel="static">
            <h1 class="font-bold text-3xl">
                {{$product->name}}
            </h1>
            <div class="font-semibold text-gray-500 my-3 flex space-x-2">
                <p class="">
                    Terjual <span class="text-black">
                    10
                </span></p>
                <p>•</p>
                <p class="flex items-center">
                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                    </svg>
                    <span class="text-black">4.8 Rating</span>
                    <span>(18 Rating)</span>
                </p>
                <p>•</p>
                <p><span class="text-black">26</span> Diskusi</p>
            </div>
            <h2 class="font-bold text-3xl">
                @if($product->discount)
                <p>
                    <strike class="text-sm">Rp. {{str_replace(',', '.', number_format($product->price))}}</strike>
                    <strong>Rp.
                        {{str_replace(',', '.', number_format($product->price - $product->price * ($product->discount / 100)))}}</strong>
                </p>
                @else
                <p><strong>Rp. {{str_replace(',', '.', number_format($product->price))}}</strong></p>
                @endif
            </h2>
            <div class="mt-6 w-full border-b"></div>
            <div class="flex w-full px-3 pt-2 relative space-x-3">
                <div>
                    <input type="radio" id="1" name="detail" checked class="peer hidden" value="1" onchange="change(1)">
                    <label type="button" class="w-fit font-medium text-sm px-2 cursor-pointer border-b-4 peer-checked:border-blue-400 border-gray-400 peer-checked:text-blue-400" for="1">
                        <span class="">
                            Detail Produk
                        </span>
                    </label>

                </div>

            </div>
            
            <div class="mb-3 w-full border-b"></div>

            <div id="detail1" class="">
                <div class="duration-700 ease-in-out h-fit">
                    <p class="font-medium text-gray-500 text-sm">Kondisi  : <span class="text-black">Baru</span></p>
                    <p class="font-medium text-gray-500 text-sm">Deskripsi  : <br> <span class="text-black">{{ $product->description }}</span></p>
                </div>
            </div>

            

            <div class="w-full border-b my-2"></div>
            <div class="flex justify-between items-center">
                <div class="flex space-x-2 items-center">
                    <div style="background-image: url({{asset('./img/store/default.png')}});" class="h-16 w-16 border-2 border-blue-400 rounded-full bg-center bg-cover"></div>
                    <div class="">
                        <div class="flex space-x-1 items-center">
                            <svg fill="#ffffff" class="w-6 h-6 p-1 rounded-full bg-blue-600" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 277.366 277.366" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M257.799,55.704c-7.706-3.866-17.016-2.36-23.111,3.734l-39.2,39.201l-38.526-86.757C153.753,4.657,146.589,0,138.683,0 s-15.07,4.657-18.278,11.883L81.878,98.64l-39.2-39.201c-6.094-6.093-15.405-7.6-23.111-3.733 C11.864,59.569,7.502,67.935,8.745,76.463l17.879,122.785c1.431,9.829,9.858,17.118,19.791,17.118h184.536 c9.933,0,18.36-7.289,19.791-17.118l17.88-122.786C269.864,67.934,265.502,59.568,257.799,55.704z"></path> <path d="M230.951,237.366H46.415c-11.046,0-20,8.954-20,20s8.954,20,20,20h184.536c11.046,0,20-8.954,20-20 S241.997,237.366,230.951,237.366z"></path> </g> </g></svg>
                            <p class="font-bold text-lg">olivegrosir</p>
                        </div>
                        <div class="font-medium text-blue-400">• Online</div>
                    </div>
                </div>
            </div>
            <div class="flex justify-around my-2">
                <div class="flex space-x-1 items-center">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                    </svg>
                    <p class="text-sm">4.8 Rata-Rata Ulasan</p>
                </div>
                <p>|</p>
                <div class="flex space-x-1 items-center">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-sm">± 4 Jam Chat dibalas</p>
                </div>

            </div>
            <div class="w-full border-b my-2"></div>
            
            <div class="text-xl font-bold">Pengiriman</div>
            <div class="flex space-x-1 items-center">
                <svg class="w-4 h-4 " fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg>
                <p class="font-semibold text-gray-500">Dikirim dari <span class="text-black">Jakarta</span></p>
            </div>
            <div class="flex space-x-1 items-center">
                <svg class="w-4 h-4 " fill="currentColor" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M283.52,143.802l-20.533-10.264l-9.382-37.524c-4.531-18.125-20.743-30.784-39.426-30.784h-41.217 c-5.458,0-9.884,4.425-9.884,9.884v6.424h-22.979v-39.04c0-5.458-4.425-9.884-9.884-9.884H64.984c-5.458,0-9.884,4.425-9.884,9.884 v39.04H32.369c-5.458,0-9.884,4.425-9.884,9.884v55.348H9.884c-5.458,0-9.884,4.425-9.884,9.884v65.231 c0,5.458,4.425,9.884,9.884,9.884h7.597c4.468,18.681,21.296,32.616,41.327,32.616s36.858-13.934,41.327-32.616h80.425 c4.468,18.681,21.296,32.616,41.327,32.616s36.858-13.934,41.327-32.616h9.409c13.443,0,24.38-10.937,24.38-24.379v-41.781 C297,156.314,291.835,147.959,283.52,143.802z M182.845,84.998h31.334c9.596,0,17.923,6.502,20.25,15.811l7.414,29.653h-58.997 V84.998z M163.078,146.77h-55.595v-45.464h55.595V146.77z M74.868,52.383h45.464v29.156H74.868V52.383z M42.252,101.306h45.464 v45.464H42.252V101.306z M58.807,244.617c-12.535,0-22.732-10.197-22.732-22.732s10.197-22.732,22.732-22.732 s22.732,10.197,22.732,22.732S71.342,244.617,58.807,244.617z M58.807,179.386c-17.477,0-32.52,10.608-39.04,25.721v-38.569h143.311 v45.464h-62.945C95.665,193.32,78.838,179.386,58.807,179.386z M221.885,244.617c-12.535,0-22.732-10.197-22.732-22.732 s10.197-22.732,22.732-22.732s22.732,10.197,22.732,22.732S234.42,244.617,221.885,244.617z M277.233,207.39 c0,2.543-2.069,4.612-4.613,4.612h-9.409c-4.468-18.681-21.296-32.616-41.327-32.616c-17.477,0-32.52,10.608-39.04,25.721V150.23 h69.324l22.512,11.253c1.573,0.787,2.551,2.368,2.551,4.126V207.39z"></path> </g></svg>
                
                <p class="font-semibold text-gray-500">Ongkir Reguler <span class="text-black">10rb - 23rb</span></p>
            </div>
            <p class="font-semibold text-gray-500">Kurir Lainnya 
                <span class="">
                    <button class="px-1 py-0.5 text-xs bg-gray-700 rounded-md text-white" data-tooltip-target="tooltip-default" type="button">Kurir Toko</button>
                    <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-xs text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                        Bisa Terima barang dihari yang sama, khusus pengiriman dari Kurir toko
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </span>
            </p>


            <div class="w-full border-b my-2"></div>

            <div class="my-5 flex justify-between items-center">
                <p class="text-sm italic">Ada masalah dengan Produk ini?</p>
                <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="flex items-center hover:font-bold">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"></path>
                    </svg>
                    Laporkan
                </button>
            </div>



        </div>

        <div>

        </div>

        <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t ">
                        <h3 class="text-xl font-semibold text-gray-900 ">
                            Form Pelaporan Produk
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="staticModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="flex items-center space-x-2">
                            <label class="text-sm font-semibold" for="">Kategori Masalah</label>
                            <select name="" id="" class="border border-gray-500 flex-1 px-2 py-2 rounded-lg focus:border-blue-600 focus:ring focus:ring-blue-200">
                                <option value="">--- Pilih Kategori Permasalahan ---</option>
                                <option value="">Barang Palsu</option>
                                <option value="">Barang Cacat</option>
                                <option value="">Lisensi Barang Palsu</option>
                                <option value="">Lain-lain</option>
                            </select>
                        </div>
                        <div class="mt-2">
                            <label class="text-sm font-semibold" for="">Ceritakan Masalah Produk ini</label>
                            <br>
                            <textarea class="mt-3 border border-gray-500 px-2 py-2 rounded-lg w-full focus:border-blue-600 focus:ring focus:ring-blue-200" name="" id="" rows="3" placeholder="ceritakan apa yang salah dengan produk ini ..."></textarea>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-between p-6 space-x-2 border-t border-gray-200 rounded-b ">
                        <button data-modal-hide="staticModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Batal</button>
                        <button data-modal-hide="staticModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Laporkan</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- KANAN -->

        <div class="md:w-2/5 w-full h-fit sticky top-0 mx-auto">
            <div class="px-2 py-2">
                

                <div  class="overflow-y-auto overflow-x-hidden  w-full md:inset-0 h-modal md:h-full">
                    
                    <div class="relative w-full max-w-lg h-full md:h-auto mx-auto">
                        <div class="relative p-4 bg-white rounded-lg md:p-8 border-2 border-blue-600 mx-auto">
                            <form action="{{ route('cart.add', $product->slug) }}" method="post" class="mb-4 text-sm font-light text-gray-500 mx-auto">
                            @csrf
                                <h3 class="mb-3 text-lg font-bold text-gray-900 ">Atur Jumlah dan Catatan</h3>
                                <div class=" flex items-center">
                                    <div class="flex items-center font-bold space-x-4 px-2 py-1.5 border-2 border-blue-600 rounded-lg">
                                        
                                        <button class="font-extrabold text-xl hover:bg-gray-100 px-2 rounded-lg" onclick="min()">-</button>
                                        <input id="qty" name="qty" class="mx-3 border-0 text-center" style="width: 23px" value="1" />
                                        <button class="font-extrabold text-xl text-blue-700 hover:bg-gray-100 px-2 rounded-lg" onclick="tambah()">+</button>
                                    </div>
                                    <p class="ml-3">Stok <span class="font-medium" id="stok">{{$product->qty}}</span></p>
                                </div>
                                
                                
                                <div class="flex items-center justify-between mt-3">
                                    <p class="text-md font-semibold ">Subtotal</p>
                                    <p class="text-xl text-black font-bold ">Rp. 
                                        <span id="subtotal">
                                    @if($product->discount)
                                        {{str_replace(',', '.', number_format($product->price - $product->price * ($product->discount / 100)))}}
                                    @else
                                    Rp. {{str_replace(',', '.', number_format($product->price))}}
                                    @endif
                                    </span></p>
                                </div>
                            </form>
                            <div class="space-y-4">
                                <button type="submit" class="flex w-full bg-blue-600 py-2.5 text-center font-semibold text-white rounded-lg hover:bg-blue-700">
                                    <div class="mx-auto flex space-x-2">
                                        <svg class="w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
                                        </svg>
                                        <p>Keranjang</p>
                                    </div>
                                </button>
                                <form action="{{ route('wishlist.add', $product->slug)}}" method="post" class="flex justify-between items-center">
                                    @csrf
                                    <button class="flex py-1 items-center font-semibold px-2 rounded-md hover:shadow-md">
                                        <svg class="w-5 mr-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"></path>
                                        </svg>
                                        Chat
                                    </button>
                                    <p>|</p>
                                    
                                    <button type="submit" class="flex cursor-pointer peer-checked:text-red-600 py-1 items-center font-semibold px-2 rounded-md hover:shadow-md">
                                        <svg class="w-5 mr-1" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
                                          </svg>
                                        Wishlist
                                    </button>
                                    <p>|</p>
                                    <button data-modal-target="staticModal3" data-modal-toggle="staticModal3" class="flex py-1 items-center font-semibold px-2 rounded-md hover:shadow-md">
                                        <svg class="w-5 mr-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"></path>
                                          </svg>
                                        Bagikan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                  


            </div>
        </div>
    </div>


    <div id="staticModal3" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Bagikan Informasi Produk
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="staticModal3">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">

                    <div class="p-4 bg-blue-200 rounded-lg">
                        <div class="flex items-center space-x-2">
                            <div class="w-16 h-16 flex-initial bg-center bg-cover rounded-md" style="background-image: url(feby.jpg);"></div>
                            <div class="flex-1">
                                <p class="font-semibold text-black w-full">
                                    Tumblr Tee / T-Shirt / Kaos Pria Lengan Pendek NY Warna Hitam
                                </p>
                                <p class="font-normal text-gray-500 text-sm">
                                    Rp. 22.000
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold">Bagikan Ke media sosialmu!</p>
                        <div class="flex overflow-x-auto space-x-3 mt-1">
                            <div>
                                <a href="" class="w-16 h-16 hover:bg-blue-100 text-blue-600 border border-blue-600 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z"></path><path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z"></path></g></svg>
                                </a>
                                <div class="text-xs text-center">WhastApp</div>
                            </div>

                            <div>
                                <a href="" class="w-16 h-16 hover:bg-blue-100 text-blue-600 border border-blue-600 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10" fill="currentColor" viewBox="-5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>facebook [#176]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)" fill="currentColor"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z" id="facebook-[#176]"> </path> </g> </g> </g> </g></svg>
                                </a>
                                <div class="text-xs text-center">Facebook</div>
                            </div>

                            <div>
                                <a href="" class="w-16 h-16 hover:bg-purple-100 text-purple-600 border border-purple-600 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>instagram [#167]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)" fill="currentColor"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#167]"> </path> </g> </g> </g> </g></svg>
                                </a>
                                <div class="text-xs text-center">Instagram</div>
                            </div>

                            <div>
                                <a href="" class="w-16 h-16 hover:bg-blue-50 text-blue-500 border border-blue-500 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="7935ec95c421cee6d86eb22ecd12f847"> <path style="display: inline;" d="M459.186,151.787c0.203,4.501,0.305,9.023,0.305,13.565 c0,138.542-105.461,298.285-298.274,298.285c-59.209,0-114.322-17.357-160.716-47.104c8.212,0.973,16.546,1.47,25.012,1.47 c49.121,0,94.318-16.759,130.209-44.884c-45.887-0.841-84.596-31.154-97.938-72.804c6.408,1.227,12.968,1.886,19.73,1.886 c9.55,0,18.816-1.287,27.617-3.68c-47.955-9.633-84.1-52.001-84.1-102.795c0-0.446,0-0.882,0.011-1.318 c14.133,7.847,30.294,12.562,47.488,13.109c-28.134-18.796-46.637-50.885-46.637-87.262c0-19.212,5.16-37.218,14.193-52.7 c51.707,63.426,128.941,105.156,216.072,109.536c-1.784-7.675-2.718-15.674-2.718-23.896c0-57.891,46.941-104.832,104.832-104.832 c30.173,0,57.404,12.734,76.525,33.102c23.887-4.694,46.313-13.423,66.569-25.438c-7.827,24.485-24.434,45.025-46.089,58.002 c21.209-2.535,41.426-8.171,60.222-16.505C497.448,118.542,479.666,137.004,459.186,151.787z"> </path> </g> </g></svg>
                                </a>
                                <div class="text-xs text-center">Twitter</div>
                            </div>

                            <div>
                                <a href="" class="w-16 h-16 hover:bg-gray-50 text-gray-500 border border-gray-500 rounded-full flex items-center justify-center">
                                    <svg class="w-10 h-10" fill="currentColor" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:currentColor;} </style> <g> <path class="st0" d="M454.821,253.582L273.256,435.14c-11.697,11.697-25.124,20.411-39.484,26.235 c-21.529,8.729-45.165,10.928-67.755,6.55c-22.597-4.378-44.054-15.25-61.597-32.784c-11.69-11.69-20.396-25.118-26.227-39.484 c-8.729-21.529-10.929-45.165-6.55-67.748c4.386-22.597,15.25-44.055,32.778-61.596l203.13-203.13 c7.141-7.134,15.299-12.43,24.035-15.969c13.1-5.318,27.516-6.656,41.263-3.994c13.769,2.677,26.798,9.27,37.498,19.963 c7.133,7.134,12.423,15.292,15.968,24.035c5.318,13.092,6.657,27.502,3.987,41.264c-2.67,13.762-9.262,26.783-19.955,37.498 L213.261,363.064c-2.534,2.528-5.375,4.364-8.436,5.61c-4.571,1.851-9.661,2.335-14.495,1.396 c-4.848-0.954-9.355-3.225-13.15-7.006c-2.534-2.534-4.364-5.368-5.603-8.429c-1.865-4.571-2.342-9.668-1.402-14.495 c0.947-4.841,3.225-9.355,7.005-13.149l175.521-175.528l-29.616-29.617l-175.528,175.52c-6.536,6.536-11.505,14.182-14.801,22.313 c-4.941,12.195-6.166,25.473-3.702,38.202c2.449,12.73,8.686,24.989,18.503,34.799c6.543,6.55,14.182,11.519,22.305,14.809 c12.202,4.948,25.473,6.165,38.21,3.702c12.722-2.449,24.989-8.678,34.806-18.511L439.97,195.602 c11.142-11.149,19.571-24.113,25.167-37.917c8.394-20.717,10.48-43.314,6.294-64.971c-4.179-21.643-14.73-42.432-31.46-59.155 c-11.149-11.142-24.114-19.571-37.918-25.166c-20.717-8.401-43.314-10.48-64.971-6.301c-21.643,4.186-42.431,14.737-59.155,31.468 L74.803,236.695c-15.713,15.691-27.552,33.931-35.426,53.352c-11.817,29.154-14.765,60.97-8.863,91.462 c5.888,30.478,20.717,59.696,44.29,83.254c15.698,15.713,33.931,27.552,53.36,35.426c29.146,11.811,60.97,14.758,91.455,8.863 c30.478-5.895,59.696-20.717,83.254-44.29l181.566-181.564L454.821,253.582z"></path> </g> </g></svg>
                                </a>
                                <div class="text-xs text-center">Salin Link</div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-between p-6 space-x-2 border-t border-gray-200 rounded-b ">
                    <button data-modal-hide="staticModal3" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    </section>

    
    <section class="w-full mt-10 px-4">
        <div class="flex w-full justify-between flex-col lg:flex-row">
            <div class="w-full px-2">
                <h2 class="font-bold text-xl">Ulasan Pembeli</h2>

                <div class="flex justify-between">
                    <div class="text-center">
                        <div class="flex items-center">
                            <svg class="w-8 h-8 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                            </svg>
                            <p class="text-5xl font-bold">4,8<span class="text-gray-400 font-thin">/<span class="text-lg">5.00</span></span> </p>
                        </div>
                        <p class="text-sm">18 Rating • 8 Ulasan</p>
                    </div>
                    <div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center px-1 py-0.5 border border-gray-700 rounded-md font-semibold hover:bg-gray-100 focus:ring focus:ring-gray-200">
                            <svg class="w-5 mx-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5"></path>
                            </svg>
                            Filter Ulasan
                            <svg class="w-5 mx-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>

                        <div id="dropdown" class="z-10 hidden border border-gray-800 bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                              <li>
                                <div class="flex px-4 py-2 space-x-1 hover:bg-gray-200">
                                    <input type="radio" name="filter" checked id="fil1" class="pee">
                                    <label for="fil1" class="flex space-x-1">
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                    </label>
                                </div>
                              </li>
                              <li>
                                <div class="flex px-4 py-2 space-x-1 hover:bg-gray-200">
                                    <input type="radio" name="filter" id="fil2" class="pee">
                                    <label for="fil2" class="flex space-x-1">
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                    </label>
                                </div>
                              </li>

                              <li>
                                <div class="flex px-4 py-2 space-x-1 hover:bg-gray-200">
                                    <input type="radio" name="filter" id="fil3" class="pee">
                                    <label for="fil3" class="flex space-x-1">
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                    </label>
                                </div>
                              </li>

                              <li>
                                <div class="flex px-4 py-2 space-x-1 hover:bg-gray-200">
                                    <input type="radio" name="filter" id="fil4" class="pee">
                                    <label for="fil4" class="flex space-x-1">
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                    </label>
                                </div>
                              </li>

                              <li>
                                <div class="flex px-4 py-2 space-x-1 hover:bg-gray-200">
                                    <input type="radio" name="filter" id="fil5" class="pee">
                                    <label for="fil5" class="flex space-x-1">
                                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                        </svg>
                                    </label>
                                </div>
                              </li>

                              <li class="my-2 border-b border-gray-500 mx-2"></li>
                              
                              <li>
                                  <div class="flex px-4 py-2 space-x-1 hover:bg-gray-200">
                                    <input type="radio" checked name="filter2" id="fil6" class="pee">
                                    <label for="fil6" class="flex space-x-1 font-bold text-black">
                                        Paling Baru
                                    </label>
                                </div>
                              </li>

                              <li>
                                <div class="flex px-4 py-2 space-x-1 hover:bg-gray-200">
                                    <input type="radio" name="filter2" id="fil7" class="pee">
                                    <label for="fil7" class="flex space-x-1 font-bold text-black">
                                        Paling Lama
                                    </label>
                                </div>
                              </li>
                              
                              <li class="my-2 border-b border-gray-500 mx-2"></li>
                              
                              <li>
                                  <div class="flex px-4 py-2 justify-between">
                                    <button class="px-2 pt-0.5 pb-2 bg-white border-2 border-blue-600 hover:text-white rounded-md font-medium hover:bg-blue-500 focus:ring focus:ring-blue-300">
                                        Batal
                                    </button>
                                    <button class="px-2 pt-0.5 pb-2 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-500 focus:ring focus:ring-blue-300">
                                        Apply
                                    </button>
                                </div>
                              </li>
                              

                            </ul>
                        </div>
                    </div>
                </div>
                <h3 class="mt-3">Menampilkan 2 dari 8 Ulasan</h3>
                
                <div class="grid grid-col-1 sm:grid-cols-2">
                <div class="my-1 px-4 py-1 border-b border-gray-300">
                    <div class="flex items-center space-x-2">
                        <div style="background-image: url({{asset('./img/user/default.png')}});" class="bg-center bg-cover h-10 w-10 rounded-full" ></div>
                        <div>
                            <p class="font-bold">Rizki Putri Aisyah</p>
                            <p class="text-sm text-gray-500">2 Hari yang lalu</p>
                        </div>
                    </div>
                    <div class="flex space-x-1">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                    </div>
                    <p class="font-normal my-1">
                        Nyaman dipakai. Jahitannya rapi. Ukuran sesuai. Bahannya adem. Tidak menerawang. Bahan menyerap keringat. Bahannya lembut.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="mx-5 p-2 bg-gray-200 rounded w-full">
                        <div class="flex items-center space-x-2">
                            <div style="background-image: url({{asset('./img/store/default.png')}});" class="bg-center bg-cover h-12 w-12 rounded-full border " ></div>
                            <div class="flex-1">
                                <p class="font-bold">olivegrosir 
                                    <span class="bg-blue-200 text-blue-700 font-semibold text-sm p-1 rounded-md">Penjual</span>
                                    <span class="text-gray-600">• Feb 2023</span>
                                </p>
                                <p class="">Ukurannya ada S dan M? Harga grosir diatas 6 lbr harga berapa?</p>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>

                <div class="my-1 px-4 py-1 border-b border-gray-300">
                    <div class="flex items-center space-x-2">
                        <div style="background-image: url({{asset('./img/user/default.png')}});" class="bg-center bg-cover h-10 w-10 rounded-full" ></div>
                        <div>
                            <p class="font-bold">Raka Arsyad</p>
                            <p class="text-sm text-gray-500">2 Hari yang lalu</p>
                        </div>
                    </div>
                    <div class="flex space-x-1">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                        </svg>
                    </div>
                    <p class="font-normal my-1">
                        Nyaman dipakai. Jahitannya rapi. Ukuran sesuai. Bahannya adem. Tidak menerawang. Bahan menyerap keringat. Bahannya lembut.
                    </p>
                    <div class="">

                        <div>
                            <input type="checkbox" class="peer hidden" id="balasan-1">
                            <label for="balasan-1" class="flex w-fit cursor-pointer items-center space-x-1 bg-gray-200 rounded-md px-2 py-1">
                                <span>Liaht Balasan</span>
                                <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                </svg>
                            </label>
                            <div class="mt-1"></div>
                            <div class="peer-checked:block hidden p-2 bg-gray-200 rounded w-full ">
                                <form>
                                    <label class="font-medium mb-2" for="">Balasan</label>
                                    <textarea name="" id="" class="w-full border rounded bg-white p-2" placeholder="ketik balasan ..." rows="3"></textarea>
                                    <button type="submit" class="px-3 py-1.5 bg-blue-500 rounded-md font-medium text-white hover:bg-blue-600">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>








    <footer class="p-4 bg-[#123] sm:p-6 mt-10">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a class="text-2xl font-semibold text-white">
                        <span class="text-blue-700">U</span>M<span class="text-blue-700">K</span>M<span class="text-blue-700 text-3xl">Pro</span>
                    </a>
                    <div class="text-white w-1/2 mt-3">
                        Bergabunglah dengan kami dalam membangun komunitas belanja yang kuat dan mendukung pertumbuhan UMKM Lokal.
                    </div>
                    <div class="flex mt-4 space-x-6">
                        <a href="#" class="text-gray-200 p-1.5 rounded-md bg-gray-500 hover:text-gray-100 dark:hover:text-white">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="text-gray-200 p-1.5 rounded-md bg-gray-500 hover:text-gray-100 dark:hover:text-white">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="text-gray-200 p-1.5 rounded-md bg-gray-500 hover:text-gray-100 dark:hover:text-white">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                        <a href="#" class="text-gray-200 p-1.5 rounded-md bg-gray-500 hover:text-gray-100 dark:hover:text-white">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="text-gray-200 p-1.5 rounded-md bg-gray-500 hover:text-gray-100 dark:hover:text-white">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase">Informasi</h2>
                        <ul class="text-gray-400 ">
                            <li class="mb-4">
                                <a href="" class="hover:underline">Disclimer</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Hubungi Kami</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Sitemap</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Terms Of Service</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase">Partner Kami</h2>
                        <ul class="text-gray-400 ">
                            <li class="mb-4">
                                <a href="" class="hover:underline ">Amazon</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Bukalapak</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Tokopedia</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Shopee</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase">Tentang Kami</h2>
                        <ul class="text-gray-400 ">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">FST UHB</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center ">© 2023 <a href="https://flowbite.com" class="hover:underline">Cukurukuk™</a>. All Rights Reserved.
                </span>
                
            </div>
        </div>
    </footer>
    


    



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    
    <script type="text/javascript">
    function tambah() {
        let value = parseInt(document.getElementById("qty").value);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById("qty").value = value;
        if(<?= $product->discount ?>){
            sub = <?= $product->price - $product->price * ($product->discount / 100) ?> * value;
            document.getElementById("subtotal").innerText = sub.toLocaleString('id-ID', { minimumFractionDigits: 0 });
        } else {
            sub = <?= $product->price ?> * value;
            document.getElementById("subtotal").innerText = sub.toLocaleString('id-ID', { minimumFractionDigits: 0 });
        }
    }
    
    function min() {
        let value = parseInt(document.getElementById("qty").value);
        let sub;
        value = isNaN(value) ? 0 : value;
        if (value > 1) value--;
        document.getElementById("qty").value = value;
        if(<?= $product->discount ?>){
            sub = <?= $product->price - $product->price * ($product->discount / 100) ?> * value;
            document.getElementById("subtotal").innerText = sub.toLocaleString('id-ID', { minimumFractionDigits: 0 });
        } else {
            sub = <?= $product->price ?> * value;
            document.getElementById("subtotal").innerText = sub.toLocaleString('id-ID', { minimumFractionDigits: 0 });
        }
    }
    </script>


</body>
</html>







