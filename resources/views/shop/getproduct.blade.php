@extends('layouts.product')
@section('content')

@include('components.nav')

<section id="detail" class="detail mt-2 mb-5">
    <div class="container-lg">
        <div class="row mt-lg-0 mt-4">
            <div class="image col-lg-4 col-12 mt-lg-0 mt-5">
                <img class="rounded" src="{{asset('/img/product/'.$product->image)}}" alt="{{$product->name}}"
                    width="100%" height="300" title="{{$product->name}}" />
            </div>
            <div class="deskripsi px-lg-3 mt-4 mt-lg-0 col-lg-8 col-12">
                <h2 class="mb-3" style="font-size: 27px">{{$product->name}}</h2>
                @if($product->discount)
                <p>
                    <strike>Rp. {{str_replace(',', '.', number_format($product->price))}}</strike>
                    <strong>Rp.
                        {{str_replace(',', '.', number_format($product->price - $product->price * ($product->discount / 100)))}}</strong>
                </p>
                @else
                <p><strong>Rp. {{str_replace(',', '.', number_format($product->price))}}</strong></p>
                @endif
                <p style="text-align: justify; line-height: 1.5em; color: #777">
                    {{$product->description}}
                </p>
                <form method="post" action="{{ route('cart.add', $product->slug) }}">
                    @csrf
                    <div class="d-flex align-items-center my-4">
                        <button type="button" class="p-1 minus border-0 rounded" onclick="min()">-</button>
                        <input id="qty" name="qty" class="mx-3 border-0 text-center" style="width: 23px" value="1" />
                        <button type="button" class="p-1 plus border-0 rounded" onclick="tambah()">
                            +
                        </button>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="px-3 border-0 py-3 d-flex align-items-center me-2 text-bg-danger rounded"
                        style="font-size: 14px">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#fff" width="20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg> 
                    Tambahkan ke Keranjang
                </button>
            </form>
            <form method="post" action="{{ route('wishlist.add', $product->slug) }}">
                @csrf
                <button type="submit" class="px-3 py-3 me-2 bg-white border border-danger rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#cf382d" width="20">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>
            </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="produk" class="container-lg produk my-5 border-top pt-3">
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="mt-1">Produk <span>Lainnya</span></h3>
        <a href="{{route('shop.product')}}" class="text-primary">Lihat Semua &rarr;</a>
    </div>
    <main class="row justify-content-start">
        @foreach($products as $product)
        <div class="col-lg-2 col-md-3 col-sm-4 mt-4 mb-3 col-6">
            <div class="card rounded border-0">
                <a href="{{route('shop.getproduct', $product->slug)}}">
                    <img class="rounded" src="{{asset('/img/product/'.$product->image)}}" alt="{{$product->name}}"
                        width="100%" title="{{$product->name}}" />
                </a>
                <div class="py-3">
                    <h2>
                        <a href="{{route('shop.getproduct', $product->slug)}}"
                            title="{{$product->name}}">{{$product->name}}</a>
                    </h2>
                    @if($product->discount)
                    <p class="p-0 m-0">Rp.
                        {{str_replace(',', '.', number_format($product->price - $product->price * ($product->discount / 100)))}}
                    </p>
                    <div class="diskon d-flex align-items-center">
                        <div class="disc text-center text-bg-primary rounded">{{$product->discount}}%</div>
                        <div class="p-0 m-0">
                            <strike>Rp. {{str_replace(',', '.', number_format($product->price))}}</strike>
                        </div>
                    </div>
                    @else
                    <p class="p-0 m-0 mb-2">Rp.
                        {{str_replace(',', '.', number_format($product->price))}}
                    </p>
                    @endif
                    @if($product->qty <= 10) <span style="font-size:12px" class="text-uppercase"><strong>Tersisa
                            {{$product->qty}}</strong></span>
                        @endif
                </div>
            </div>
        </div>
        @endforeach
    </main>
</section>

@include('components.footerhome')

@endsection