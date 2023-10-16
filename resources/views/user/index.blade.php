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
                        <h3 class="p-4 pb-3 uppercase text-sm font-bold">Daftar User</h3>
                        <p class="mb-6 text-sm px-4">Daftar user pada UMKMPro</p>

                        <a href="{{ route('user.create') }}"
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
                                    placeholder="Cari nama user..." autofocus autocomplete="off">
                            </div>
                        </div>

                    </div>

                    <div id="result">
                        @include('user.data')
                    </div>

                </div>
            </section>
        </div>

    </main>

</div>

<script type="module">
$(document).ready(() => {
    $('a.inline-flex').addClass(
        'focus:outline-none focus:ring-0 focus:border-slate-300 hover:bg-slate-100 active:bg-slate-200')
    $('span.inline-flex').addClass('bg-slate-200')
    $('span.inline-flex svg').parent().removeClass('bg-slate-200')

    function fetchData(page, search) {
        $.ajax({
            url: "/admin/user/data?page=" + page + "&search=" + search,
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

    function getDeleteData(id) {
        $.ajax({
            url: "/admin/user/delete/" + id,
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