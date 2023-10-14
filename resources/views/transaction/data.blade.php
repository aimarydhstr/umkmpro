<div class="overflow-x-auto relative px-4 mb-5">
    <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
        <thead class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
            <tr>
                <th scope="col" class="py-3 px-6">#</th>
                <th scope="col" class="py-3 px-6">ID Transaksi</th>
                <th scope="col" class="py-3 px-6">Nama</th>
                <th scope="col" class="py-3 px-6">Total</th>
                <th scope="col" class="py-3 px-6">Tanggal</th>
                <th scope="col" class="py-3 px-6">Status</th>
                <th scope="col" class="py-3 w-40 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @if($transactions->isEmpty())

            <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6 text-center" colspan="7">Tidak ada data transaksi</td>
            </tr>

            @else

            @foreach($transactions as $transaction)
            <tr valign="middle" class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6">{{ ++$i }}</td>
                <td class="py-4 px-6">{{ $transaction->id }}</td>
                <td class="py-7 px-6">{{ $transaction->user->name }}</td>
                <td class="py-7 px-6">Rp. {{str_replace(',', '.', number_format($transaction->total))}}</td>
                <td class="py-7 px-6">{{ $transaction->created_at }}</td>
                <td class="py-7 px-6">{{ $transaction->status->title }}</td>
                <td class="py-4 w-40 text-center flex justify-center items-center">
                    <a href="{{route('transaction.show', $transaction->id)}}" class="bg-emerald-500 text-white mt-4 p-2 m-0 mr-1 w-14 text-center rounded-lg shadow-lg text-xs hover:bg-emerald-700 active:bg-emerald-800">Detail</a>
                    @if($transaction->status_id != '5')
                    <button id="hapus" data-id="{{ $transaction->id }}" class="bg-red-500 text-white p-2 w-14 mt-4 text-center rounded-lg shadow-lg text-xs m-0 hover:bg-red-700 active:bg-red-800" type="button">Batal</button>
                    @endif
                </td>
            </tr>

            @endforeach

            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

            @endif

        </tbody>
    </table>
</div>

<div class="px-4">{{ $transactions->links() }}</div>

@if(!$transactions->isEmpty())

<div id="deleteData">
    @include('transaction.cancel')
</div>

@endif