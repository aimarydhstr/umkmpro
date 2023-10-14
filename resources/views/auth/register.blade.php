@extends('layouts.auth')

@section('content')

<section id="login" class="flex items-center flex-col justify-center min-h-screen bg-red-500 text-slate-500 dark:text-slate-200">
    <div class="shadow-xl flex justify-around items-center max-w-3xl w-full bg-white relative dark:bg-slate-800 rounded-2xl my-5">
        <div class="block p-7" style="width: 100%!important">
            <div class="border-b dark:border-slate-600 pb-5 block mb-3">
                <div class="flex">
                    <p class="font-medium text-slate-900 dark:text-white text-3xl pb-4 mr-1.5">Register Account</p>
                </div>
                <p>Lengkapi formulir di bawah ini untuk mendaftar akun baru</p>
            </div>

            <form method="post" action="{{ route('register.post') }}" class="flex py-4 pb-7" enctype="multipart/form-data">
            @csrf
            <div class="grow">
               <div>
                  <label for="name">Nama Lengkap</label>
                  <input name="name" id="name" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Nama Lengkap..." required autofocus value="{{ old('name') }}">
                  @if($errors->has('name'))
                      <div class="text-red-500">{{ $errors->first('name') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="gender">Jenis Kelamin</label>
                  <select name="gender" id="gender" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Jenis Kelamin..." required value="{{ old('gender') }}">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                  @if($errors->has('gender'))
                      <div class="text-red-500">{{ $errors->first('gender') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="email">Email</label>
                  <input name="email" id="email" type="email" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Email..." required value="{{ old('email') }}">
                  @if($errors->has('email'))
                      <div class="text-red-500">{{ $errors->first('email') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="username">Username</label>
                  <input name="username" id="username" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Username..." required value="{{ old('username') }}">
                  @if($errors->has('username'))
                      <div class="text-red-500">{{ $errors->first('username') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="password">Password</label>
                  <input name="password" id="password" type="password" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Password..." required autocomplete="off">
                  @if($errors->has('password'))
                      <div class="text-red-500">{{ $errors->first('password') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="password_confirmation">Ulangi Password</label>
                  <input name="password_confirmation" id="password_confirmation" type="password" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Ulangi Password..." required autocomplete="off">
                  @if($errors->has('password_confirmation'))
                      <div class="text-red-500">{{ $errors->first('password_confirmation') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="province">Provinsi</label>
                  <input name="province" id="province" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Provinsi..." required value="{{ old('province') }}">
                  @if($errors->has('province'))
                      <div class="text-red-500">{{ $errors->first('province') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="city">Kota</label>
                  <input name="city" id="city" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Kota..." required value="{{ old('city') }}">
                  @if($errors->has('city'))
                      <div class="text-red-500">{{ $errors->first('city') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="address">Alamat Rumah</label>
                  <textarea name="address" id="address" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Alamat Rumah..." required rows="4">{{ old('address') }}</textarea>
                  @if($errors->has('address'))
                      <div class="text-red-500">{{ $errors->first('address') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="postcode">Kode Pos</label>
                  <input name="postcode" id="postcode" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Kode Pos..." required value="{{ old('postcode') }}">
                  @if($errors->has('postcode'))
                      <div class="text-red-500">{{ $errors->first('postcode') }}</div>
                  @endif
               </div>
               <div class="pt-3">
                  <label for="phone">Nomor HP/WhatsApp</label>
                  <input name="phone" id="phone" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600" placeholder="Nomor HP..." required value="{{ old('phone') }}">
                  @if($errors->has('phone'))
                      <div class="text-red-500">{{ $errors->first('phone') }}</div>
                  @endif
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