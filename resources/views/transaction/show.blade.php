@extends('layouts.admin')

@section('content')

<div class="block w-full">

    @include('components.sidenav')

    <main id="main" class="fixed p-5 left-72 right-0 max-sm:-right-72 top-0 bottom-0 overflow-y-auto text-slate-700 dark:text-slate-200 transition-all duration-300">

        @include('components.pagetitle')

        <div class="block mb-5">
            <section class="p-3">
                <div class="bg-white dark:bg-slate-700 shadow-xl p-3 pb-7 rounded-xl relative overflow-hidden box-border">
                    <div class="relative">
                        <h3 class="p-4 pb-3 uppercase text-sm font-bold">Detail Transaksi : #{{ $transaction->id }}</h3>
                        <p class="mb-4 text-sm px-4">Detail transaksi pada Mebelicious</p>
                        <button type="button" onclick="showModal()" class="bg-violet-500 text-white px-4 py-2 rounded-lg shadow-lg text-xs absolute top-6 right-4 hover:bg-violet-600 active:bg-violet-700">Bukti Transfer</button>
                    </div>

                    <div id="result">
                        <div class="py-3 px-4 flex items-center">
                            <form action="{{ route('transaction.status', $transaction->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <label for="status">Status</label>
                                <select name="status_id" id="status"
                                    class="p-3 focus:outline-none ml-5 focus:ring focus:ring-violet-500 rounded-lg w-64 border my-3 dark:bg-slate-700 dark:border-slate-600 border-slate-300" required>
                                    @foreach($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->title }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="p-3 bg-emerald-500 text-white ml-5 rounded-lg">Simpan</button>
                            </form>
                        </div>
                        <div class="overflow-x-auto relative px-4 mb-5">
                            <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
                                <thead class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">#</th>
                                        <th scope="col" class="py-3 px-6">Produk</th>
                                        <th scope="col" class="py-3 px-6">Jumlah</th>
                                        <th scope="col" class="py-3 px-6">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if($transaction->order->isEmpty())

                                    <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                                        <td class="py-4 px-6 text-center" colspan="4">Tidak ada data transaksi</td>
                                    </tr>

                                    @else

                                    @foreach($transaction->order as $order)
                                    <tr valign="middle" class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                                        <td class="py-4 px-6">{{++$i}}</td>
                                        <td class="py-4 px-6 flex items-center"><img src="{{asset('/img/product/'.$order->product->image)}}" class="me-3 rounded" width="60" height="60" alt="{{$order->product->name}}">{{$order->product->name}}</td>
                                        <td class="py-4 px-6">{{$order->qty}}</td>
                                        <td class="py-4 px-6">Rp. {{str_replace(',', '.', number_format($order->price))}}</td>
                                    </tr>

                                    @endforeach

                                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>
        </div>

    </main>

</div>

<div id="modal" class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70 flex justify-center items-center">

    <!-- The close button -->
    <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
        onclick="closeModal()">&times;</a>

    <!-- A big image will be displayed here -->
    <img id="modal-img" src="{{ asset('/img/transaction/'.$transaction->pay_image) }}" class="max-w-[800px] max-h-[600px] object-cover" />
</div>

<script>
        var modal = document.getElementById("modal");
        var modalImg = document.getElementById("modal-img");

        function showModal() {
            modal.classList.remove('hidden');
        }

        function closeModal() {
            modal.classList.add('hidden');
        }
    </script>

@endsection