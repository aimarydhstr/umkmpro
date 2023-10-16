@extends('layouts.admin')

@section('content')

<div class="block w-full">

    @include('components.sidenav')
    <main id="main"
        class="fixed p-5 left-0 sm:left-72 right-0 top-0 bottom-0 overflow-y-auto overflow-x-hidden text-slate-700 dark:text-slate-200 transition-all duration-300">

        @include('components.pagetitle')


        <div class="block mb-5">
            <section class="p-3">
                <div
                    class="bg-white dark:bg-slate-700 shadow-xl p-3 pb-7 rounded-xl relative overflow-hidden box-border">
                    <div class="relative">
                        <h3 class="p-4 pb-3 uppercase text-sm font-bold">Laporan Produk</h3>
                        <p class="mb-6 text-sm px-4">Daftar produk yang dilaporkan di UMKMPro</p>

                        <a href="{{ route('product.create') }}"
                            class="bg-violet-500 text-white px-4 py-2 rounded-lg shadow-lg text-xs absolute top-6 right-4 hover:bg-violet-600 active:bg-violet-700">Tambah
                            Data</a>

                        <div class="flex items-center mb-5 px-4">
                            <div class="relative w-full">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-slate-500 dark:text-slate-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="search" id="search"
                                    class="border bg-transparent text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 block w-full pl-10 p-2.5 dark:border-slate-500 border-slate-300"
                                    placeholder="Cari nama product..." autofocus autocomplete="off">
                            </div>
                        </div>

                    </div>

                    <div id="result">
                        

                    <div class="overflow-x-auto relative px-4 mb-5">
                        <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
                            <thead class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
                                <tr>
                                    <th scope="col" class="py-3 px-6">#</th>
                                    <th scope="col" class="py-3 px-6">Nama Produk</th>
                                    <th scope="col" class="py-3 px-6">Kategori</th>
                                    <th scope="col" class="py-3 px-6">Tag</th>
                                    <th scope="col" class="py-3 px-6" colspan="2">Isi Laporan</th>
                                    <th scope="col" class="py-3 w-40 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                

                                <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                                    <td class="py-4 px-6 text-center" colspan="8">Tidak ada data produk</td>
                                </tr>


                                <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                                    <td class="py-4 px-6">m</td>
                                    <td class="py-4 px-6">m</th>
                                    
                                    <td class="py-4 px-6">m</td>
                                    
                                    
                                    
                                    <td class="py-4 px-6">m</td>
                                    
                                    
                                    <td class="py-4 px-6" colspan="2">Produk ini .... </td>

                                    <td class="py-4 w-40 text-center flex justify-center">
                                        <a href=" " class="bg-emerald-500 text-white p-2 inline-block mr-1 w-14 text-center rounded-lg shadow-lg text-xs hover:bg-emerald-700 active:bg-emerald-800">Edit</a>
                                        <button id="hapus" data-id="" class="bg-red-500 text-white p-2 w-14 text-center rounded-lg shadow-lg text-xs m-0 hover:bg-red-700 active:bg-red-800" type="button">Hapus</button>
                                    </td>
                                </tr>

                                

                                <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

                                

                            </tbody>
                        </table>
                    </div>

                    <div class="px-4">links</div>

                    

                    <div id="deleteData">
                        
                    </div>

                    </div>

                </div>
            </section>
        </div>


    </main>

<div>

@endsection