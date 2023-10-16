@extends('layouts.shop')
@section('content')

@include('components.nav')


<section id="kategori" class="bg-danger mb-5 mt-lg-0 mt-5">
    <div class="container-lg py-5 text-white text-center">
        <h3>Kategori Produk</h3>
        <div id="dragCat" class="row hori-scroll mt-4">
            @foreach($categories as $category)
            <a href="#" class="kategori rounded bg-white text-white shadow text-center">
                <div class="cat-icon mx-auto rounded-circle d-flex align-items-center justify-content-center mt-4">
                    <img src="{{asset('/img/category/'.$category->icon)}}" alt="{{$category->name}}" width="30" height="30">
                </div>
                <p class="mt-3">{{$category->name}}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>

<section id="produk" class="container-lg produk my-5">
    <h3 class="mt-1">Semua <span>Produk</span></h3>
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
    {{ $products->links() }}
</section>

@include('components.footerhome')

<style type="text/css">
    
a.inline-flex svg, span.inline-flex svg {
    width: 20px;
    height: 20px;
}
a.inline-flex, span.inline-flex {
    display: inline-flex;
}
span.inline-flex span {
    padding:0;
}
.flex.justify-between.flex-1 {
    display: none;
}
.hidden {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.hidden span {
    color: #333;
}

</style>

@endsection