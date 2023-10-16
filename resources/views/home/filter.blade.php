@extends('layouts.shop')
@section('content')

@include('components.nav')

<section id="produk" class="container-fluid produk my-5 pt-3 pt-md-0 row mx-auto">

    <!-- FILTER -->
    <div class="col-md-3 collapse order-sm-1 mb-2" id="collapseExample">
        <h4>Filter</h4>
        <form action="" class="p-2 border rounded">

            <h5>Lokasi</h5>
            <div>
                <div class="form-group">
                    <select class="form-control select2" name="city_id" id="city">
                        <option></option>
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <h5 class="mt-2">Harga</h5>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Rp.</span>
                <input type="number" class="form-control" placeholder="Harga Minimal" name="minPrice">
            </div>

            <div class="input-group flex-nowrap mt-2">
                <span class="input-group-text" id="addon-wrapping">Rp.</span>
                <input type="number" class="form-control" placeholder="Harga Maksimal" name="maxPrice">
            </div>

            <h5 class="mt-2">Kondisi</h5>
            <div class="d-block ps-1">
                <div class="mb-2">
                    <input type="radio" name="condition" id="semua" value="">
                    <label for="semua">Semua</label>
                </div>
                <div class="mb-2">
                    <input type="radio" name="condition" id="baru" value="Baru">
                    <label for="baru">Baru</label>
                </div>
                <div>
                    <input type="radio" name="condition" id="bekas" value="Bekas">
                    <label for="bekas">Bekas</label>
                </div>
            </div>

            <h5 class="mt-2">Rating</h5>
            <div class="d-flex mx-2 mb-2">
                <input type="radio" name="rate" value="" id="4" class="">
                <label for="4" class="d-flex">
                    <span class="ms-2 text-black">Semua</span>
                </label>
            </div>
            <div class="d-flex mx-2 mb-2">
                <input type="radio" name="rate" value="4" id="4" class="">
                <label for="4" class="d-flex">
                    <svg style="width: 20px; margin-left:6px;color:gold" class="me-1" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                    </svg>
                    4 Keatas
                </label>
            </div>
            <div class="d-flex mx-2 mb-2">
                <input type="radio" name="rate" value="3" id="3" class="">
                <label for="3" class="d-flex">
                    <svg style="width: 20px; margin-left:6px;color:gold" class="me-1" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                    </svg>
                    3 Keatas
                </label>
            </div>

            <input type="submit" value="Filter Pencarian" class="mt-3 mb-1 d-flex w-100 justify-content-center btn btn-primary">

        </form>
    </div>

    <div class="col-9 mx-auto">



        <div class="d-flex justify-content-between">
            <h3 class="mt-1">Semua <span>Produk</span></h3>
            <button class="d-flex align-items-center btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">Filter
                <svg style="width:20px; margin-left:5px;" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5"></path>
                </svg>
            </button>
        </div>

        <main class="row justify-content-start">
            @foreach($products as $product)
            <div class="col-lg-2 col-md-3 col-sm-4 col-6  mt-4 mb-3">
                <div class="card rounded border-0 shadow-sm h-100">
                    <a href="{{route('shop.getproduct', $product->slug)}}">
                        <img class="rounded" src="{{asset('/img/product/'.$product->image)}}" alt="{{$product->name}}" width="100%" title="{{$product->name}}" />
                    </a>
                    <div class="py-3 px-1">
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
                        <!-- rate -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-middle  ">
                                <svg class="" style="width: 20px; margin-right:3px;color:gold" fill="currentColor" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                </svg>
                                <div class="">5.0</div>
                            </div>
                            @if($product->qty <= 10) <span style="font-size:12px" class="text-uppercase"><strong>Tersisa
                                    {{$product->qty}}</strong></span>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </main>

    </div>
</section>

@include('components.footerhome')

<style type="text/css">
    h5 {
        font-size: 18px;
        padding: 10px 0;
    }

    a.inline-flex svg,
    span.inline-flex svg {
        width: 20px;
        height: 20px;
    }

    a.inline-flex,
    span.inline-flex {
        display: inline-flex;
    }

    span.inline-flex span {
        padding: 0;
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

    .fil:hover {
        text-decoration: underline;
    }

    select option {
        color: #333 !important;
    }
</style>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            allowClear: true,
            placeholder: 'Pilih kota',
            width: '100%'
        });
    });
</script>
@endsection