@extends('layouts.admin')

@section('content')

<div class="block w-full">

    @include('components.sidenav')

    <main id="main" class="fixed p-5 left-72 right-0 max-sm:-right-72 top-0 bottom-0 overflow-y-auto text-slate-700 dark:text-slate-200 transition-all duration-300">

        @include('components.pagetitle')

        <div class="block mb-5">
            <section class="p-3">
                <div class="bg-white dark:bg-slate-700 shadow-xl pt-3 pb-7 rounded-xl relative overflow-hidden box-border">
                    <div class="relative border-b dark:border-slate-600 px-7 flex items-center">
                        <a href="{{ route('product') }}" class="p-3 bg-slate-100 hover:bg-slate-200 dark:bg-slate-600 dark:hover:bg-slate-500 dark:active:bg-slate-400 dark:text-slate-200 rounded-full -mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                        </a>

                        <div class="ml-5">
                            <h3 class="pt-4 pb-1 uppercase text-sm font-bold">Edit Produk</h3>
                            <p class="mb-6 text-sm">Edit data produk Mebelicious</p>
                        </div>
                    </div>

                    <form method="post" action="{{ route('product.update', $product->id) }}" class="flex p-7" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="basis-1/3 pr-10">
                            <div class="relative" id="dataFoto">
                                <img src="{{ asset('/img/product/'.$product->image) }}" alt="{{ $product->name }}" class="w-full h-64 block object-cover rounded-xl shadow-lg cursor-point bg-slate-600">
                                <div id="labelFoto" class="flex justify-center items-center hidden absolute top-0 w-full">
                                    <label for="foto" class="flex flex-col justify-center items-center w-full h-64 bg-slate-50 rounded-lg border-2 border-slate-300 border-dashed cursor-pointer dark:hover:bg-slate-500 dark:bg-slate-600 hover:bg-slate-100 dark:border-slate-500 dark:hover:border-slate-400 relative">
                                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="mb-2 text-sm text-slate-500 dark:text-slate-400">
                                                <strong>Klik untuk upload foto produk</strong>
                                            </p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">SVG, PNG, JPG, JPEG,
                                                WEBP atau GIF</p>
                                        </div>
                                        <input id="foto" type="file" class="hidden" name="image" value="{{ $product->image }}">
                                        <p class="hidden absolute text-sm text-slate-500 dark:text-slate-400 bottom-0 py-3 px-5 border-t left-0 right-0 text-center" id="namaFoto"></p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="basis-2/3">
                            <div>
                                <label for="nama">Nama produk</label>
                                <input name="name" id="nama" type="text" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300" placeholder="Ketik nama produk..." required autocomplete="off" autofocus value="{{ $product->name }}">
                                @if($errors->has('name'))
                                <div class="text-red-500">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="pt-3">
                                <label for="description">Deskripsi produk</label>
                                <textarea name="description" id="description" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300" placeholder="Ketik deskripsi produk..." required autocomplete="off" rows="4">{{ $product->description }}</textarea>
                                @if($errors->has('description'))
                                <div class="text-red-500">{{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <div class="flex">
                                <div class="pt-5 pr-5 basis-1/2">
                                    <label for="tag">Tag produk</label>
                                    <select id="tag" name="tag_id"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        required>
                                        <option selected disabled>Pilih tag</option>
                                        @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}" {{ $tag->id == $product->tag_id ? 'selected' : '' }}>{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('tag_id'))
                                    <div class="text-red-500">{{ $errors->first('tag_id') }}</div>
                                    @endif
                                </div>
                                <div class="pt-5 pl-5 basis-1/2">
                                    <label for="condition">Kondisi produk</label>
                                    <select name="condition" id="condition"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        required autocomplete="off" value="{{ old('condition') }}">
                                        <option selected disabled>Pilih kondisi</option>
                                        <option value="Baru" {{ $product->condition == 'Baru' ? 'selected' : '' }}>Baru</option>
                                        <option value="Bekas" {{ $product->condition == 'Bekas' ? 'selected' : '' }}>Bekas</option>
                                    </select>

                                    @if($errors->has('condition'))
                                    <div class="text-red-500">{{ $errors->first('condition') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="flex">
                                <div class="pt-5 pr-5 basis-1/2">
                                    <label for="kategori">Kategori produk</label>

                                    <select id="kategori" name="category_id"
                                        class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300"
                                        required>
                                        <option selected disabled>Pilih kategori</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))
                                    <div class="text-red-500">{{ $errors->first('category_id') }}</div>
                                    @endif
                                </div>
                                <div class="pt-5 pl-5 basis-1/2">
                                    <label for="stok">Stok produk</label>
                                    <input name="qty" id="stok" type="number" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300" placeholder="Ketik stok produk..." required autocomplete="off" value="{{ $product->qty }}">
                                    @if($errors->has('qty'))
                                    <div class="text-red-500">{{ $errors->first('qty') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="flex">
                                <div class="pt-5 pr-5 basis-1/2">
                                    <label for="price">Harga produk</label>
                                    <input name="price" id="price" type="number" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300" placeholder="Ketik harga..." required autocomplete="off" value="{{ $product->price }}">
                                    @if($errors->has('price'))
                                    <div class="text-red-500">{{ $errors->first('price') }}</div>
                                    @endif
                                </div>
                                <div class="pt-5 pl-5 basis-1/2">
                                    <label for="discount">Diskon produk</label>
                                    <input name="discount" id="discount" type="number" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300" placeholder="Ketik diskon (%)..." autocomplete="off" value="{{ $product->discount }}">
                                    @if($errors->has('discount'))
                                    <div class="text-red-500">{{ $errors->first('discount') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="pt-3">
                                <button type="submit" class="p-3 w-full bg-violet-500 hover:bg-violet-700 active:bg-violet-800 text-white uppercase font-bold rounded-lg text-sm mt-3 focus:outline-none focus:ring focus:ring-violet-500">Submit</button>
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