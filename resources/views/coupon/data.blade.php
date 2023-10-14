<div class="overflow-x-auto relative px-4 mb-5">
    <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
        <thead class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
            <tr>
                <th scope="col" class="py-3 px-6">#</th>
                <th scope="col" class="py-3 px-6">Nama Kupon</th>
                <th scope="col" class="py-3 px-6">Kode Kupon</th>
                <th scope="col" class="py-3 px-6">Diskon</th>
                <th scope="col" class="py-3 px-6">Tanggal Mulai</th>
                <th scope="col" class="py-3 px-6">Tanggal Berakhir</th>
                <th scope="col" class="py-3 w-40 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @if($coupons->isEmpty())

            <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6 text-center" colspan="7">Tidak ada data kupon</td>
            </tr>

            @else

            @foreach($coupons as $coupon)
            <tr valign="middle" class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6">{{ ++$i }}</td>
                <td class="py-4 px-6">{{ $coupon->name }}</td>
                <td class="py-4 px-6">{{ $coupon->code }}</td>
                <td class="py-4 px-6">{{ $coupon->discount }}</td>
                <td class="py-4 px-6">{{ $coupon->started_at }}</td>
                <td class="py-4 px-6">{{ $coupon->finished_at }}</td>
                <td class="py-4 w-40 text-center flex justify-center">
                    <button type="button" id="edit" data-id="{{ $coupon->id }}" class="bg-emerald-500 text-white p-2 m-0 mr-1 w-14 text-center rounded-lg shadow-lg text-xs hover:bg-emerald-700 active:bg-emerald-800">Edit</button>
                    <button id="hapus" data-id="{{ $coupon->id }}" class="bg-red-500 text-white p-2 w-14 text-center rounded-lg shadow-lg text-xs m-0 hover:bg-red-700 active:bg-red-800" type="button">Hapus</button>
                </td>
            </tr>

            @endforeach

            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

            @endif

        </tbody>
    </table>
</div>

<div class="px-4">{{ $coupons->links() }}</div>

@if(!$coupons->isEmpty())

<div id="editData">
    @include('coupon.edit')
</div>

<div id="deleteData">
    @include('coupon.delete')
</div>

@endif