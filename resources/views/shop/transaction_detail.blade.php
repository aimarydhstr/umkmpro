@extends('layouts.shop')
@section('content')

@include('components.alertb')
@include('components.nav')

<section id="transaction" class="mb-5">
    <div class="container-lg py-4">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <tr>
                    <th>#</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
                @foreach($transaction->order as $order)
                <tr valign="middle">
                    <td>{{++$i}}</td>
                    <td><img src="{{asset('/img/product/'.$order->product->image)}}" class="me-3 rounded" width="60" height="60" alt="{{$order->product->name}}">{{$order->product->name}}</td>
                    <td>{{$order->qty}}</td>
                    <td>Rp. {{str_replace(',', '.', number_format($order->price))}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <a href="{{route('shop.transaction')}}" class="btn btn-secondary px-4">Kembali</a>
    </div>
</section>

@include('components.footerhome')

@endsection