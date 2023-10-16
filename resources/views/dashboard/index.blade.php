@extends('layouts.admin')

@section('content')

<div class="block w-full">

    @include('components.sidenav')
    <main id="main"
        class="fixed p-5 left-0 sm:left-72 right-0 top-0 bottom-0 overflow-y-auto overflow-x-hidden text-slate-700 dark:text-slate-200 transition-all duration-300">

        @include('components.pagetitle')
        <div class="block w-full">
            <section class="flex flex-wrap items-center justify-between mb-5 max-lg:block">
                <div class="block p-3 basis-1/3">
                    <div class="bg-white shadow-xl flex items-center dark:bg-slate-700 p-8 rounded-xl">
                        <div class="p-4 bg-violet-500 rounded-full">
                            <svg fill="currentColor" class="w-10 h-10 text-slate-100" viewBox="-5.55 0 122.88 122.88"
                                version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                style="enable-background:new 0 0 111.78 122.88" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path
                                            d="M20.27,104.92c-1.86,0.9-4.09,0.12-4.98-1.74c-0.9-1.86-0.12-4.09,1.74-4.98c4.5-2.17,8.98-3.96,13.43-5.37 c4.48-1.42,8.99-2.46,13.53-3.12c2.31-0.34,4.62-0.57,6.93-0.71V85.3l-10.99-8.18c-0.4-0.53-0.69-1.13-0.86-1.76H21.68l0,0v-0.02 c-3.74,0-7.12-1.51-9.56-3.95c-2.44-2.44-3.95-5.82-3.95-9.56H8.15v0V45.47h-3.5h0v-0.02c-1.28,0-2.45-0.52-3.28-1.36 c-0.83-0.83-1.34-1.98-1.35-3.25L0,40.83v0h0.01v-3.82H0l0,0h0.01c0-1.29,0.52-2.45,1.36-3.28c0.83-0.83,1.98-1.34,3.25-1.35 l0.01-0.01h0h16.69h0v0.01c1.29,0,2.45,0.52,3.28,1.35v0.01c0.83,0.83,1.34,1.98,1.35,3.25l0.01,0.02v0h-0.01v3.82h0.01v0h-0.01 c0,1.29-0.52,2.46-1.35,3.28H24.6c-0.83,0.83-1.98,1.34-3.25,1.34l-0.02,0.02h0h-4.46v16.35v0h-0.02c0,1.3,0.55,2.5,1.43,3.39 c0.88,0.88,2.08,1.43,3.39,1.43v-0.02l0,0h2.86v-7.89c0-3.35,2.95-6.09,6.54-6.09H79.1c3.6,0,6.54,2.74,6.54,6.09v7.89h2.86h0v0.02 c1.3,0,2.51-0.55,3.39-1.43c0.88-0.88,1.43-2.09,1.43-3.39h-0.02v0V45.47h-2.86h0v-0.02c-1.28,0-2.44-0.52-3.28-1.36 c-0.83-0.83-1.34-1.98-1.35-3.25l-0.01-0.02v0h0.01v-3.82H85.8l0,0h0.01c0-1.29,0.53-2.45,1.36-3.28c0.83-0.83,1.98-1.34,3.25-1.35 l0.02-0.01h0h16.69h0v0.01c1.29,0,2.45,0.52,3.28,1.35v0.01c0.83,0.83,1.34,1.98,1.35,3.25l0.01,0.02v0h-0.01v3.82h0.01v0h-0.01 c0,1.28-0.52,2.45-1.36,3.28c-0.83,0.83-1.98,1.34-3.25,1.34l-0.01,0.02h0h-5.1v16.35v0h-0.02c0,3.74-1.51,7.12-3.95,9.56 c-2.44,2.44-5.82,3.95-9.56,3.95v0.02h0H71.56c-0.17,0.77-0.51,1.5-1,2.13l-10.92,7.45v4.05c3.02,0.16,6.03,0.5,9.05,1.02 c8.22,1.41,16.41,4.13,24.59,8.2c1.85,0.92,2.6,3.16,1.68,5.01c-0.92,1.85-3.16,2.6-5.01,1.68c-7.52-3.75-15.03-6.25-22.51-7.53 c-2.6-0.44-5.2-0.74-7.79-0.9v7.17c0,2.41-1.95,4.36-4.36,4.36c-2.41,0-4.36-1.95-4.36-4.36v-7.15c-1.96,0.12-3.92,0.33-5.88,0.61 c-4.08,0.59-8.2,1.55-12.33,2.86C28.54,101.28,24.39,102.93,20.27,104.92L20.27,104.92z M27.84,0h54.5c1.81,0,3.44,1.49,3.28,3.28 l-4.5,42.37c-0.19,1.79-1.48,3.28-3.28,3.28H32.56c-1.8,0-3.12-1.48-3.28-3.28L24.56,3.28C24.4,1.49,26.04,0,27.84,0L27.84,0z M50.22,75.36h10.15H50.22L50.22,75.36z M91.96,110.1c3.53,0,6.39,2.86,6.39,6.39c0,3.53-2.86,6.39-6.39,6.39 c-3.53,0-6.39-2.86-6.39-6.39C85.57,112.96,88.43,110.1,91.96,110.1L91.96,110.1z M55.48,110.1c3.53,0,6.39,2.86,6.39,6.39 c0,3.53-2.86,6.39-6.39,6.39s-6.39-2.86-6.39-6.39C49.09,112.96,51.95,110.1,55.48,110.1L55.48,110.1z M19,110.1 c3.53,0,6.39,2.86,6.39,6.39c0,3.53-2.86,6.39-6.39,6.39c-3.53,0-6.39-2.86-6.39-6.39C12.61,112.96,15.47,110.1,19,110.1L19,110.1z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="ml-5">
                            <p class="font-bold text-xs uppercase mb-2 text-slate-500 dark:text-slate-200">Total Produk
                            </p>
                            <p class="text-3xl font-bold text-slate-500 dark:text-slate-200">{{ $product }}</p>
                        </div>
                    </div>
                </div>
                <div class="block p-3 basis-1/3">
                    <div class="bg-white shadow-xl flex items-center dark:bg-slate-700 p-8 rounded-xl">
                        <div class="p-4 bg-violet-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-10 h-10 text-slate-100">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <p class="font-bold text-xs uppercase mb-2 text-slate-500 dark:text-slate-200">Total User
                            </p>
                            <p class="text-3xl font-bold text-slate-500 dark:text-slate-200">{{ $userCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="block p-3 basis-1/3">
                    <div class="bg-white shadow-xl flex items-center dark:bg-slate-700 p-8 rounded-xl">
                        <div class="p-4 bg-violet-500 rounded-full">
                            <svg fill="currentColor" class="w-10 h-10 text-slate-100" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M25.994 16.144l-12.225-12.225-11.769 0.045 0.018 10.831 12.662 12.662c0.794 0.795 2.072 0.806 2.854 0.024l8.484-8.485c0.781-0.781 0.771-2.058-0.024-2.852zM7.081 10.952c-1.104 0-2-0.896-2-2s0.896-2 2-2c1.105 0 2 0.896 2 2s-0.895 2-2 2zM28.846 16.168l-12.225-12.225-1.471 0.005 12.27 12.207c0.795 0.795 0.805 2.071 0.023 2.853l-8.484 8.485c-0.207 0.207-0.451 0.354-0.709 0.451 0.721 0.277 1.561 0.135 2.135-0.438l8.486-8.485c0.781-0.782 0.77-2.059-0.025-2.853z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="ml-5">
                            <p class="font-bold text-xs uppercase mb-2 text-slate-500 dark:text-slate-200">Total
                                Kategori
                            </p>
                            <p class="text-2xl font-bold text-slate-500 dark:text-slate-200">{{ $category }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="flex flex-wrap justify-between mb-5 max-lg:block">
                <section class="basis-2/3 p-3">
                    <div
                        class="bg-white dark:bg-slate-700 shadow-xl p-3 pb-7 rounded-xl relative overflow-hidden box-border">
                        <h3 class="p-4 pb-3 uppercase text-sm font-bold">Daftar Seller</h3>
                        <p class="mb-6 text-sm px-4">Rekap pendaftaran seller hari ini pada Mebelicious</p>

                        <div class="overflow-x-auto relative px-4 mb-5">
                            <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
                                <thead
                                    class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">#</th>
                                        <th scope="col" class="py-3 px-6">Nama</th>
                                        <th scope="col" class="py-3 px-6">Email</th>
                                        <th scope="col" class="py-3 px-6">Username</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if($user->isEmpty())

                                    <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                                        <td class="py-4 px-6 text-center" colspan="4">Tidak ada user hari ini</td>
                                    </tr>

                                    @else

                                    @foreach($user as $d)

                                    <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                                        <td class="py-4 px-6">{{ ++$i }}</td>
                                        <td class="py-4 px-6">{{ $d->name }}</th>
                                        <td class="py-4 px-6">{{ $d->email }}</td>
                                        <td class="py-4 px-6">{{ $d->username }}</td>
                                    </tr>

                                    @endforeach

                                    @endif

                                </tbody>
                            </table>
                        </div>

                        <div class="text-right px-4 pt-3 pb-2">
                            <a href="{{ route('user') }}"
                                class="text-violet-500 border border-white dark:border-slate-700 dark:text-violet-300 dark:hover:text-slate-200 hover:text-slate-700 py-2 rounded-lg text-sm"
                                title="Lihat Laporan Peminjaman">
                                <span class="inline-block mr-1">Lihat Semua User</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 inline-block">
                                    <path fill-rule="evenodd"
                                        d="M16.72 7.72a.75.75 0 011.06 0l3.75 3.75a.75.75 0 010 1.06l-3.75 3.75a.75.75 0 11-1.06-1.06l2.47-2.47H3a.75.75 0 010-1.5h16.19l-2.47-2.47a.75.75 0 010-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="basis-1/3 p-3">
                    <div class="bg-white dark:bg-slate-700 shadow-xl rounded-xl">
                        <h3 class="px-5 py-4 uppercase text-xs font-bold">User Baru Ditambahkan</h3>

                        @if($user->isEmpty())

                        <div class="flex justify-center py-3 px-4 border-t dark:border-slate-600">
                            <span class="text-slate-700 dark:text-slate-100 text-sm block">Tidak ada data user</span>
                        </div>

                        @else

                        @foreach($user as $d)

                        <div class="flex items-center py-3 px-4 border-t dark:border-slate-600">
                            <img src="{{ asset('/img/user/'.$d->photo) }}" alt="{{ $d->name }}"
                                class="w-10 h-10 mt-1 object-cover rounded-full mr-3">

                            <p class="grow overflow-hidden">
                                <span
                                    class="text-slate-700 dark:text-slate-100 text-sm block font-semibold">{{ $d->name }}</span>
                                <span class="text-slate-500 dark:text-slate-300 text-xs block">{{ $d->email }}</span>
                            </p>
                        </div>

                        @endforeach

                        @endif

                    </div>
                </section>
            </div>
        </div>

    </main>

</div>

@endsection