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
                    class="bg-white dark:bg-slate-700 shadow-xl p-3 pb-7 rounded-xl relative overflow-hidden box-border">
                    <div class="relative">
                        <h3 class="p-4 pb-3 uppercase text-sm font-bold">Daftar Kupon</h3>
                        <p class="mb-6 text-sm px-4">Daftar kupon pada Mebelicious</p>

                        <button type="button" data-modal-target="addModal" data-modal-toggle="addModal"
                            class="bg-violet-500 text-white px-4 py-2 rounded-lg shadow-lg text-xs absolute top-6 right-4 hover:bg-violet-600 active:bg-violet-700">Tambah
                            Data</button>

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
                                <input type="text" id="search"
                                    class="border bg-transparent text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 block w-full pl-10 p-2.5 dark:border-slate-500 border-slate-300"
                                    placeholder="Cari nama kupon...">
                            </div>
                        </div>
                    </div>

                    <div id="result">
                        @include('coupon.data')
                    </div>

                </div>
            </section>
        </div>

    </main>

</div>

<div id="addModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="addModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                    Tambah Kupon
                </h3>
            </div>

            <form action="{{ route('coupon.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="p-6">
                    <div class="pt-0">
                        <label for="name">Nama Kupon</label>
                        <input name="name" id="name" type="text"
                            class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600"
                            placeholder="Nama kupon..." required autofocus value="{{ old('name') }}">
                        @if($errors->has('name'))
                        <div class="text-red-500">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="description">Deskripsi Kupon</label>
                        <textarea name="description" id="description" rows="3" 
                            class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600"
                            placeholder="Deskripsi kupon..." required autofocus>{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                        <div class="text-red-500">{{ $errors->first('description') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="code">Kode Kupon</label>
                        <input name="code" id="code" type="text"
                            class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600"
                            placeholder="Kode kupon..." required autofocus value="{{ old('code') }}">
                        @if($errors->has('code'))
                        <div class="text-red-500">{{ $errors->first('code') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="discount">Diskon Kupon</label>
                        <input name="discount" id="discount" type="number"
                            class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600"
                            placeholder="Diskon (%)..." required autofocus value="{{ old('discount') }}">
                        @if($errors->has('discount'))
                        <div class="text-red-500">{{ $errors->first('discount') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="started_at">Tanggal Mulai</label>
                        <input name="started_at" id="started_at" type="datetime-local"
                            class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600"
                            placeholder="Tanggal Mulai..." required autofocus value="{{ old('started_at') }}">
                        @if($errors->has('started_at'))
                        <div class="text-red-500">{{ $errors->first('started_at') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="finished_at">Tanggal Berakhir</label>
                        <input name="finished_at" id="finished_at" type="datetime-local"
                            class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600"
                            placeholder="Tanggal Berakhir..." required autofocus value="{{ old('finished_at') }}">
                        @if($errors->has('finished_at'))
                        <div class="text-red-500">{{ $errors->first('finished_at') }}</div>
                        @endif
                    </div>
                </div>
                <div class="px-6 py-4 border-t dark:border-gray-600 flex justify-end">
                    <button class="px-4 py-2 bg-violet-500 rounded text-white" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="module">
$(document).ready(() => {
    $('a.inline-flex').addClass(
        'focus:outline-none focus:ring-0 focus:border-slate-300 hover:bg-slate-100 active:bg-slate-200')
    $('span.inline-flex').addClass('bg-slate-200')
    $('span.inline-flex svg').parent().removeClass('bg-slate-200')

    function fetchData(page, search) {
        $.ajax({
            url: "/admin/coupon/data?page=" + page + "&search=" + search,
            success: function(data) {
                $('#result').html(data)
                $('a.inline-flex').addClass(
                    'focus:outline-none focus:ring-0 focus:border-slate-300 hover:bg-slate-100 active:bg-slate-200'
                )
                $('span.inline-flex').addClass('bg-slate-200')
                $('span.inline-flex svg').parent().removeClass('bg-slate-200')
            }
        })
    }

    $(document).on('keyup', '#search', function() {
        const search = $('#search').val()
        const page = $('#hidden_page').val()

        fetchData(page, search)
    })

    $(document).on('click', 'a.inline-flex', function(event) {
        event.preventDefault()
        const page = $(this).attr('href').split('page=')[1]
        $('#hidden_page').val(page)
        const search = $('#search').val()

        fetchData(page, search);
        $(this).parent().addClass('bg-violet-700 text-white')
    })

    function getUpdateData(id) {
        $.ajax({
            url: "/admin/coupon/edit/" + id,
            success: function(data) {
                $('#editData').html('')
                $('#editData').html(data)
                $('#editModal').removeClass('hidden')
            }
        })
    }
    $(document).on('click', '#edit', function(e) {
        e.preventDefault()
        const id = $(this).data('id')
        getUpdateData(id)
    })
    $(document).on('click', '#batalEdit', function(e) {
        e.preventDefault()
        $('#editModal').addClass('hidden')
    })

    function getDeleteData(id) {
        $.ajax({
            url: "/admin/coupon/delete/" + id,
            success: function(data) {
                $('#deleteData').html('')
                $('#deleteData').html(data)
                $('#deleteModal').removeClass('hidden')
            }
        })
    }
    $(document).on('click', '#hapus', function(e) {
        e.preventDefault()
        const id = $(this).data('id')
        getDeleteData(id)
    })
    $(document).on('click', '#batal', function(e) {
        e.preventDefault()
        $('#deleteModal').addClass('hidden')
    })
})
</script>

@endsection