@extends('layouts.admin')

@section('content')

<div class="block w-full">

    @include('components.sidenav')

    <main id="main"
        class="fixed p-5 left-72 right-0 max-sm:-right-72 top-0 bottom-0 overflow-y-auto text-slate-700 dark:text-slate-200 transition-all duration-300">

        @include('components.pagetitle')

        <div class="block mb-5">
            <section class="p-3">
                <div
                    class="bg-white dark:bg-slate-700 shadow-xl pt-3 pb-7 rounded-xl relative overflow-hidden box-border">
                    <div class="relative border-b dark:border-slate-600 px-7 flex items-center">
                        <a href="{{ route('user') }}"
                            class="p-3 bg-slate-100 hover:bg-slate-200 dark:bg-slate-600 dark:hover:bg-slate-500 dark:active:bg-slate-400 dark:text-slate-200 rounded-full -mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                        </a>

                        <div class="ml-5">
                            <h3 class="pt-4 pb-1 uppercase text-sm font-bold">Edit User</h3>
                            <p class="mb-6 text-sm">Edit data user Mebelicious</p>
                        </div>
                    </div>

                    <form method="post" action="{{ route('user.update', $user->id) }}" class="flex p-7"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="w-68">
                            <div class="relative rounded-full" id="dataFoto">
                                <img src="{{ asset('/img/user/'.$user->photo) }}" alt="{{ $user->name }}"
                                    class="object-cover shadow-lg cursor-point w-72 h-64 rounded-full">
                                <div id="labelFoto"
                                    class="flex justify-center items-center rounded-full hidden absolute top-0 w-full">
                                    <label for="foto"
                                        class="flex flex-col justify-center items-center w-72 h-64 bg-slate-50 rounded-full border-2 border-slate-300 border-dashed cursor-pointer dark:hover:bg-slate-500 dark:bg-slate-600 hover:bg-slate-100 dark:border-slate-500 dark:hover:border-slate-400 relative">
                                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="mb-2 text-sm text-slate-500 dark:text-slate-400">
                                                <strong>Klik untuk upload foto user</strong>
                                            </p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">SVG, PNG, JPG, JPEG,
                                                WEBP atau GIF</p>
                                        </div>
                                        <input id="foto" type="file" class="hidden" name="photo"
                                            value="{{ $user->photo }}">
                                        <p class="hidden absolute text-sm text-slate-500 dark:text-slate-400 -bottom-20 rounded-xl p-3 bg-slate-100 dark:bg-slate-600 left-0 right-0 text-center"
                                            id="namaFoto"></p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="pl-12 grow">
                            <div>
                                <label for="nama">Nama user</label>
                                <input name="name" id="nama" type="text"
                                    class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                    placeholder="Ketik nama user..." required autocomplete="off" autofocus
                                    value="{{ $user->name }}">
                                @if($errors->has('name'))
                                <div class="text-red-500">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="flex">
                                <div class="pt-5 pr-5 basis-1/2">
                                    <label for="username">Username</label>
                                    <input name="username" id="username" type="text"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Ketik username user..." required autocomplete="off"
                                        value="{{ $user->username }}" readonly>
                                    @if($errors->has('username'))
                                    <div class="text-red-500">{{ $errors->first('username') }}</div>
                                    @endif
                                </div>
                                <div class="pt-5 pl-5 basis-1/2">
                                    <label for="email">Email</label>
                                    <input name="email" id="email" type="email"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Ketik email user..." required autocomplete="off"
                                        value="{{ $user->email }}" readonly>
                                    @if($errors->has('email'))
                                    <div class="text-red-500">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="flex">
                                <div class="pt-5 pr-5 basis-1/2">
                                    <label for="password">Password baru</label>
                                    <input name="password" id="password" type="password"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Ketik password user..." autocomplete="off"
                                        value="{{ old('password') }}">
                                    @if($errors->has('password'))
                                    <div class="text-red-500">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="pt-5 pl-5 basis-1/2">
                                    <label for="password_confirmation">Ulangi password baru</label>
                                    <input name="password_confirmation" id="password_confirmation" type="password"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Ulangi password user..." autocomplete="off"
                                        value="{{ old('password_confirmation') }}">
                                    @if($errors->has('password_confirmation'))
                                    <div class="text-red-500">{{ $errors->first('password_confirmation') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="pt-5">
                                <label for="address">Alamat</label>
                                <textarea name="address" id="address"
                                    class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                    placeholder="Ketik deskripsi user..." required autocomplete="off"
                                    rows="4">{{ $user->address }}</textarea>
                                @if($errors->has('address'))
                                <div class="text-red-500">{{ $errors->first('address') }}</div>
                                @endif
                            </div>

                            <div class="flex">
                                <div class="pt-5 pr-5 basis-1/2">
                                    <label for="role">Role</label>
                                    <select name="role_id" id="role"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Pilih role user..." required autocomplete="off" autofocus>
                                        @foreach($roles as $role)
                                        @if($user->role->id == $role->id)
                                        <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                        @else
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('role_id'))
                                    <div class="text-red-500">{{ $errors->first('role_id') }}</div>
                                    @endif
                                </div>
                                <div class="pt-5 pl-5 basis-1/2">
                                    <label for="gender">Jenis kelamin</label>
                                    <select name="gender" id="gender"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Pilih jenis kelamin user..." required autocomplete="off" autofocus
                                        value="{{ $user->gender }}">
                                        @if($user->gender == 'Laki-Laki')
                                        <option value="Laki-Laki" selected>Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        @else
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                        @endif
                                    </select>
                                    @if($errors->has('gender'))
                                    <div class="text-red-500">{{ $errors->first('gender') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="flex">
                                <div class="pt-5 pr-5 basis-1/2">
                                    <label for="provinsi">Provinsi</label>
                                    <input name="province" id="provinsi" type="text"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Ketik provinsi user..." required autocomplete="off"
                                        value="{{ $user->province }}">
                                    @if($errors->has('province'))
                                    <div class="text-red-500">{{ $errors->first('province') }}</div>
                                    @endif
                                </div>
                                <div class="pt-5 pl-5 basis-1/2">
                                    <label for="city">Kota</label>
                                    <input name="city" id="city" type="text"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Ketik kota user..." required autocomplete="off"
                                        value="{{ $user->city }}">
                                    @if($errors->has('city'))
                                    <div class="text-red-500">{{ $errors->first('city') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="flex">
                                <div class="pt-5 pr-5 basis-1/2">
                                    <label for="postcode">Kode Pos</label>
                                    <input name="postcode" id="postcode" type="text"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Ketik postcode user..." required autocomplete="off"
                                        value="{{ $user->postcode }}">
                                    @if($errors->has('postcode'))
                                    <div class="text-red-500">{{ $errors->first('postcode') }}</div>
                                    @endif
                                </div>
                                <div class="pt-5 pl-5 basis-1/2">
                                    <label for="phone">Nomor HP/WhatsApp</label>
                                    <input name="phone" id="phone" type="text"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        placeholder="Ketik nomor HP user..." required autocomplete="off"
                                        value="{{ $user->phone }}">
                                    @if($errors->has('phone'))
                                    <div class="text-red-500">{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="pt-3">
                                <button type="submit"
                                    class="p-3 w-full bg-violet-500 hover:bg-violet-700 active:bg-violet-800 text-white uppercase font-bold rounded-lg text-sm mt-3 focus:outline-none focus:ring focus:ring-violet-500">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

    </main>

</div>

<script type="module">
$(document).ready(() => {

    $(document).on('change', '#foto', function() {
        const foto = $('#foto').val().replace(/.*(\/|\\)/, '')
        $('#namaFoto').removeClass('hidden')
        $('#namaFoto').html(foto)
    })

    $(document).on('mouseover', '#dataFoto', function() {
        $('#labelFoto').removeClass('hidden')
    })

    $(document).on('mouseout', '#dataFoto', function() {
        $('#labelFoto').addClass('hidden')
        if ($('#foto').val()) $('#labelFoto').removeClass('hidden')
    })
})
</script>

@endsection