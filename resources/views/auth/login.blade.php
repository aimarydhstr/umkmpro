@extends('layouts.auth')

@section('content')

<section id="login" class="flex items-center flex-col justify-center min-h-screen bg-red-500 text-slate-500 dark:text-slate-200">
    <div class="shadow-xl flex justify-around items-center max-w-3xl w-full bg-white relative dark:bg-slate-800 rounded-2xl my-5">
        <div class="block p-7" style="width: 100%!important">
            <div class="border-b dark:border-slate-600 pb-5 block mb-3">
                <div class="flex">
                    <p class="font-medium text-slate-900 dark:text-white text-3xl pb-4 mr-1.5">Login Account</p>
                </div>
                <p>Lengkapi formulir di bawah ini untuk login</p>
            </div>

            @error('name')
                <div class="py-4 px-5 bg-red-200 text-red-700 rounded-lg mt-5 mb-2">{{ $message }}</div>
            @enderror

            <form method="post" action="{{ route('login.post') }}" class="flex py-4 pb-7" enctype="multipart/form-data">
            @csrf
            <div class="grow">
               <div class="pt-3">
                  <label for="username">Username</label>
                  <input name="username" id="username" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Username..." required autocomplete="off" autofocus>
               </div>
               <div class="pt-3">
                  <label for="password">Password</label>
                  <input name="password" id="password" type="password" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Password..." required autocomplete="off">
               </div>
               <div class="pt-3">
                  <button type="submit" class="p-3 w-full bg-red-500 hover:bg-red-700 active:bg-red-800 text-white uppercase font-bold rounded-lg text-sm mt-3 focus:outline-none focus:ring focus:ring-red-500">Submit</button>
               </div>
            </div>
         </form>

        </div>
    </div>
</section>
@endsection