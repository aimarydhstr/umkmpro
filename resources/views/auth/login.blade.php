@extends('layouts.auth')

@section('content')

<div class="h-screen w-screen bg-gray-200 p-10">
	<div class="flex h-full w-full bg-white rounded-3xl">
		
	
	<div class="w-1/2 h-full p-10">
		<form method="post" action="{{ route('login.post') }}" enctype="multipart/form-data" class="h-full w-full bg-white rounded-2xl text-center px-12 grid place-items-center">
            @csrf
			<div class="h-fit w-full space-y-5">
			<h1 class="text-3xl font-bold">Login</h1>
			<p class="text-xl">Selamat datang di <span class="font-bold text-2xl text-blue-600">U<span class="text-black">M</span>K<span class="text-black">M</span>Pro</span>!</p> 
            @error('name')
                <div class="py-4 px-5 bg-red-200 text-red-700 rounded-lg mt-5 mb-2">{{ $message }}</div>
            @enderror
			<div class="relative">
			    <input name="username" type="text" id="username" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pl-12" placeholder=" " />
			    <label for="username" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-10">Username</label>

			    <svg class="w-6 h-6 absolute z-10 top-1/2 -translate-y-1/2 left-3 text-blue-600 peer-placeholder-shown:text-gray-700 peer-focus:text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
				</svg>

			</div>

			<div class="relative">
			    <input name="password" type="password" id="password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pl-12" placeholder=" " />
			    <label for="password" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-10">Password</label>

			    <svg class="w-6 h-6 absolute z-10 top-1/2 -translate-y-1/2 left-3 text-blue-600 peer-placeholder-shown:text-gray-700 peer-focus:text-blue-700" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
			    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
			</svg>


			</div>

			<button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-xl">Login</button>
                  
		</form>
		</div>

	</div>


	<div class="w-1/2 h-full p-8 ">
		<div class="w-full h-full bg-contain bg-center rounded-xl" style="background-image: url({{asset('./img/home/login.jpg')}});"></div>
	</div>
</div>
@endsection