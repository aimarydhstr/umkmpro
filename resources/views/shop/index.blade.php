@extends('layouts.shop')
@section('content')

@include('components.nav')

<section class="banner-wrap container-lg">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div
                    class="banner banner1 p-lg-5 py-5 px-3 rounded d-flex justify-content-between align-items-center rounded">
                    <div class="col-lg-7 col-10">
                        <h3 class="mb-3 text-white">
                            Diskon Hingga 80% Setiap Pembelian Lebih dari 5 Juta Rupiah
                        </h3>
                        <p class="mb-4 text-white">
                            Promo ini berlangsung hanya sampai dengan 11 Mei 2023
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div
                    class="banner banner2 p-lg-5 py-5 px-3 rounded d-flex justify-content-between align-items-center rounded">
                    <div class="col-lg-7 col-10">
                        <h3 class="mb-3 text-white">
                            Gratis Ongkir Seluruh Wilayah Setiap Pembelian Lebih dari 7
                            Juta Rupiah
                        </h3>
                        <p class="mb-4 text-white">
                            Promo ini berlangsung hanya sampai dengan 30 November 2023
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div
                    class="banner banner3 p-lg-5 py-5 px-3 rounded d-flex justify-content-between align-items-center rounded">
                    <div class="col-lg-7 col-10">
                        <h3 class="mb-3 text-white">
                            Cashback Hingga 60% Setiap Pembelian Lebih dari 3 Juta Rupiah
                        </h3>
                        <p class="mb-4 text-white">
                            Promo ini berlangsung hanya sampai dengan 30 April 2023
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-lg mt-3">
    <div class="row justify-content-between">
        @foreach($tags as $tag)
        <div class="col-lg-4 col-md-6 col-12 my-2 my-lg-0 rounded" style="height:150px;overflow:hidden!important">
            <a href="{{route('shop.tag', $tag->slug)}}" class="tag d-block overflow-hidden position-relative rounded">
                <img src="{{asset('/img/tag/'.$tag->image)}}" class="rounded" alt="{{$tag->name}}" width="100%"
                    height="150">
                <p class="text-white p-2 d-flex align-items-center justify-content-center rounded position-absolute"
                    style="top:0;left:0;right:0;bottom:-16px;background:rgba(0,0,0,.5)" href="#">{{$tag->name}}</p>
            </a>
        </div>
        @endforeach
    </div>
</section>

<section id="kategori" class="container-lg my-5">
    <h3>Kategori <span>Produk</span></h3>
    <div id="dragCat" class="row hori-scroll mt-4">
        @foreach($categories as $category)
        <a href="{{route('shop.category', $category->slug)}}" class="kategori rounded bg-body-secondary text-center">
            <div class="cat-icon mx-auto rounded-circle d-flex align-items-center justify-content-center mt-4">
                <img src="{{asset('/img/category/'.$category->icon)}}" alt="{{$category->name}}" width="30" height="30">
            </div>
            <p class="mt-3">{{$category->name}}</p>
        </a>
        @endforeach
    </div>
</section>

@if($coupon)
<section id="coupon" class="p-0 p-lg-2 container-lg">
    <div
        class="kupon mb-5 p-lg-5 py-5 px-3 text-white rounded d-flex justify-content-between align-items-center rounded">
        <div class="col-lg-7 col-10">
            <h3 class="mb-3">{{$coupon->name}}</h3>
            <p>{{$coupon->description}}</p>
            <div class="bg-white text-black rounded align-items-center d-inline-flex mt-2">
                <input readonly class="p-2 px-3 border-0 rounded" id="code-coupon" value="{{$coupon->code}}" />
                <button type="button" id="copyCode" class="bg-transparent px-3 border-0" style="margin-top: -3px">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" width="18" height="18">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
@endif

<section id="produk" class="container-lg produk mb-5">
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="mt-1">Produk <span>Terbaru</span></h3>
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