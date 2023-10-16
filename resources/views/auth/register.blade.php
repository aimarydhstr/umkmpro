@extends('layouts.auth')

@section('content')

<div class="h-screen w-screen bg-gray-200 p-10">
	<div class="flex h-full w-full bg-white rounded-3xl">
		<div class="grid place-items-center w-full">
			<div class="w-full text-center	p-5">

				<h1 class="text-3xl font-bold">Register</h1>
				<p class="text-xl">Buat Akun <span class="font-bold text-2xl text-blue-600">U<span class="text-black">M</span>K<span class="text-black">M</span>Pro</span>!</p> 

				
		<form method="post" action="{{ route('register.post') }}" class="mt-5 text-left" enctype="multipart/form-data">
            @csrf
<div id="controls-carousel" class="relative w-full bg-gray-200 rounded-xl" data-carousel="static">
    <div class="relative h-96 overflow-hidden rounded-lg ">
       
        <div class="hidden duration-700 ease-in-out px-4 py-2 grid grid-cols-2 gap-1 sm:gap-5 text-sm" data-carousel-item>
            	<div class="col-span-2 sm:col-span-1">
                  <label for="name">Nama Lengkap</label>
                  <input name="name" id="name" type="text" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-1.5" placeholder="Nama Lengkap..." required autofocus value="{{ old('name') }}">
                  
               </div>
               <div class="">
                  <label for="gender">Jenis Kelamin</label>
                  <select name="gender" id="gender" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-1.5" placeholder="Jenis Kelamin..." required value="{{ old('gender') }}">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                  
               </div>
               <div class="">
                  <label for="email">Email</label>
                  <input name="email" id="email" type="email" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-1.5 " placeholder="Email..." required value="{{ old('email') }}">
                  
               </div>
               <div class="col-span-2 sm:col-span-1">
                  <label for="username">Username</label>
                  <input name="username" id="username" type="text" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-1.5 " placeholder="Username..." required value="{{ old('username') }}">
                  
               </div>
               <div class="">
                  <label for="password">Password</label>
                  <input name="password" id="password" type="password" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-1.5 " placeholder="Password..." required autocomplete="off">
                  
               </div>
               <div class="">
                  <label for="password_confirmation">Ulangi Password</label>
                  <input name="password_confirmation" id="password_confirmation" type="password" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-1.5 " placeholder="Ulangi Password..." required autocomplete="off">
                  
               </div>
        </div>

        
        <div class="hidden duration-700 ease-in-out px-4 py-2 grid grid-cols-2 gap-1 sm:gap-5 text-sm" data-carousel-item>
            <div class="">
                  <label for="province">Provinsi</label>
                  <input name="province" id="province" type="text" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-3 " placeholder="Provinsi..." required value="{{ old('province') }}">
                  
               </div>
               <div class="">
                  <label for="city">Kota</label>
                  <input name="city" id="city" type="text" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-3 " placeholder="Kota..." required value="{{ old('city') }}">
                  
               </div>
               <div class="">
                  <label for="postcode">Kode Pos</label>
                  <input name="postcode" id="postcode" type="text" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-3 " placeholder="Kode Pos..." required value="{{ old('postcode') }}">
                  
               </div>
               <div class="">
                  <label for="phone">Nomor HP/WhatsApp</label>
                  <input name="phone" id="phone" type="text" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-3 " placeholder="Nomor HP..." required value="{{ old('phone') }}">
                  
               </div>
               <div class="col-span-2">
                  <label for="address">Alamat Rumah</label>
                  <textarea name="address" id="address" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 rounded-lg w-full border my-3 " placeholder="Alamat Rumah..." required rows="4">{{ old('address') }}</textarea>
                  
               </div>
        </div>
        
        <div class="hidden duration-700 ease-in-out grid place-items-center" data-carousel-item>
            <div class="w-1/3">
                  <button type="submit" class="p-3 w-full bg-blue-500 hover:bg-blue-700 active:bg-blue-800 text-white uppercase font-bold rounded-lg text-sm mt-3 focus:outline-none focus:ring focus:ring-blue-500">Buat Akun Sekarang</button>
               </div>        
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out grid place-items-center" data-carousel-item="active">
            <div class="w-1/2 text-center">
                  <label for="gender" class="font-bold text-lg">Buat Akun Sebagai</label>
                  <select name="gender" id="gender" class="p-3 focus:outline-none focus:ring focus:ring-blue-500 bg-blue-500 text-white rounded-lg w-full border my-1.5" placeholder="Jenis Kelamin..." required value="{{ old('gender') }}">
                      <option value="Laki-Laki">Pembeli</option>
                      <option value="Perempuan">Penjual</option>
                  </select>
                  
               </div>
        </div>
        
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-100 left-10 z-30 flex items-center justify-center  px-2 cursor-pointer group focus:outline-none border-2 border-blue-600 rounded-xl bg-blue-100 text-blue-800 font-bold" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
        Sebelumnya
    </button>

    <button type="button" class="absolute top-100 right-10 z-30 flex items-center justify-center  px-2 cursor-pointer group focus:outline-none border-2 border-blue-600 rounded-xl bg-blue-100 text-blue-800 font-bold" data-carousel-next>
    	Berikutnya
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
         </form>
			</div>
		</div>
	</div>
</div>

@endsection