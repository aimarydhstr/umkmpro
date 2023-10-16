@extends('layouts.shop')
@section('content')

@include('components.alertb')
@include('components.nav')

<section id="produk" class="mb-5">
    <div class="container py-2">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Wishlist Belanja</h1>
                                        <h6 class="mb-0 text-muted">{{$count}} Produk</h6>
                                    </div>
                                    <hr class="my-4">

                                    @foreach($wishlists as $wishlist)
                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2 col-5">
                                            <img src="{{asset('img/product/'.$wishlist->product->image)}}"
                                                class="img-fluid rounded-3" alt="{{$wishlist->product->name}}">
                                        </div>
                                        <div class="col-7 col-md-8 col-lg-8 col-xl-8 d-flex p-0 m-0 align-items-center">
                                            <div class="col-md-4 col-lg-4 col-xl-4 mb-md-0 mb-2 ps-2">
                                                <h6 class="text-primary text-uppercase"
                                                    style="font-size: 13px; font-weight: 600">
                                                    {{$wishlist->product->category->name}}
                                                </h6>
                                                <h6 class="text-dark mb-0">{{$wishlist->product->name}}</h6>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-xl-4 offset-lg-1">
                                                <h6 class="mb-0">Rp.
                                                    {{str_replace(',', '.', number_format($wishlist->product->price - ($wishlist->product->price * ($wishlist->product->discount / 100))))}}
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-lg-2 col-xl-2 text-end d-flex justify-content-end">
                                            <form class="me-1" action="{{ route('wishlist.destroy', $wishlist->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn border border-danger text-danger" title="Hapus"
                                                    type="submit"><i class="fa fa-trash"></i></a>
                                            </form>
                                            <form action="{{ route('cart.addone', $wishlist->product->slug) }}"
                                                method="post">
                                                @csrf
                                                <button class="btn border border-success text-success"
                                                    title="Tambahkan ke Keranjang" type="submit"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </form>
                                        </div>
                                    </div>

                                    <hr class="my-4">
                                    @endforeach

                                    <div class="pt-5 d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0"><a href="{{route('shop')}}" class="text-body"><i
                                                    class="fa fa-long-arrow-left me-2"></i>Back to shop</a>
                                        </h6>

                                        <form action="{{ route('cart.addall') }}" method="post">
                                            @csrf
                                            <button class="btn btn-primary" title="Tambahkan ke Keranjang"
                                                type="submit"><i class="fa fa-shopping-cart me-2"></i> Tambahkan
                                                Semua</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.footerhome')

@endsection