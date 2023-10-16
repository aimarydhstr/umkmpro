@extends('layouts.home')

@section('content')

@include('components.navhome')

<section id="hero" class="hero py-5 mt-2 fade-bottom">
    <div class="container-lg text-center d-flex flex-column align-items-center">
        <h3 class="col-lg-6">Jelajahi Berbagai Produk Unik dari UMKM Lokal</h3>
        <p class="col-lg-6 my-3 mb-4">
            Temukan keindahan dalam beragam kategori produk kami,
            Kategori yang terorganisir rapi untuk pengalaman berbelanja yang lancar
        </p>
        <form class="bg-body-secondary rounded-full d-flex align-items-center col-lg-5 col-10 py-2 m-0 mt-3"
            role="search">
            <label for="search" class="ps-4 pe-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </label>
            <input id="search" class="form-control bg-transparent border-0 rounded" type="search" placeholder="Search"
                aria-label="Search" />
        </form>
    </div>
</section>


@include('components.servicehome')

@include('components.cathome')

@include('components.producthome')

<section id="jasa" class="jasa py-5 text-bg-primary reveal">
    <div class="container-lg d-flex justify-content-between align-items-center">
        <div class="title">
            <h3>Pesan Sekarang, Dapatkan Lebih</h3>
            <p>
                Beli sekarang dan nikmati pengiriman cepat dan pelayanan yang memuaskan, Kami hadir untuk memenuhi kebutuhan belanja online Anda.
            </p>
        </div>
        <div class="col-lg-3 d-flex justify-content-end">
            <a href="{{route('shop')}}" target="blank" class="p-3 px-4 rounded-full text-primary bg-white">Belanja Sekarang</a>
        </div>
    </div>
</section>

@include('components.reasonhome')

@include('components.footerhome')

@endsection