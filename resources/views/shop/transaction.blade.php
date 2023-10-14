@extends('layouts.shop')
@section('content')

@include('components.alertb')
@include('components.nav')

<section id="transaction" class="mb-5">
    <div class="container-lg py-4">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>#</th>
                    <th>ID Transaksi</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
                @foreach($transactions as $transaction)
                <tr valign="middle">
                    <td>{{++$i}}</td>
                    <td>{{$transaction->id}}</td>
                    <td>{{$transaction->created_at}}</td>
                    <td>Rp. {{str_replace(',', '.', number_format($transaction->total))}}</td>
                    <td>{{$transaction->status->title}}</td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{route('shop.transactiondetail', $transaction->id)}}" class="btn btn-success btn-sm me-1">Detail</a>
                            <a href="{{route('shop.transactioncancel', $transaction->id)}}" class="btn btn-danger btn-sm">Batal</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>

@include('components.footerhome')

@endsection