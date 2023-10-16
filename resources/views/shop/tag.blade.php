@extends('layouts.shop')
@section('content')

@include('components.nav')

<section id="kategori" class="bg-primary mb-5 mt-lg-0 mt-5">
    <div class="container-lg py-5 text-white text-center">
        <h3>Tag {{$tag->name}}</h3>
    </div>
</section>

<section id="produk" class="container-lg produk my-5">
    <main class="row justify-content-start">
        @foreach($products as $product)
        <div class="col-lg-2 col-md-3 col-sm-4 mt-4 mb-3 col-6">
            <div class="card rounded border-0">
                <a href="{{route('shop.getproduct', $product->slug)}}">
                    <img class="rounded" src="{{asset('/img/product/'.$product->image)}}" alt="{{$product->name}}" width="100%" title="{{$product->name}}" />
                </a>
                <div class="py-3">
                    <h2>
                        <a href="{{route('shop.getproduct', $product->slug)}}" title="{{$product->name}}">{{$product->name}}</a>
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