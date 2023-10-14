<div class="overflow-x-auto relative px-4 mb-5">
    <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
        <thead class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
            <tr>
                <th scope="col" class="py-3 px-6">#</th>
                <th scope="col" class="py-3 px-6">Nama</th>
                <th scope="col" class="py-3 px-6">Kategori</th>
                <th scope="col" class="py-3 px-6">Tag</th>
                <th scope="col" class="py-3 px-6">Harga</th>
                <th scope="col" class="py-3 px-6">Stok</th>
                <th scope="col" class="py-3 w-40 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @if($products->isEmpty())

            <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6 text-center" colspan="8">Tidak ada data produk</td>
            </tr>

            @else

            @foreach($products as $product)

            <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6">{{ ++$i }}</td>
                <td class="py-4 px-6">{{ $product->name }}</th>
                @if($product->category)
                <td class="py-4 px-6">{{ $product->category->name }}</td>
                @else
                <td class="py-4 px-6">Tidak Ada</td>
                @endif
                @if($product->tag)
                <td class="py-4 px-6">{{ $product->tag->name }}</td>
                @else
                <td class="py-4 px-6">Tidak Ada</td>
                @endif
                <td class="py-4 px-6">Rp. {{str_replace(',', '.', number_format($product->price))}}</td>
                <td class="py-4 px-6">{{ $product->qty }}</td>
                <td class="py-4 w-40 text-center flex justify-center">
                    <a href="{{ route('product.edit', $product->id) }}" class="bg-emerald-500 text-white p-2 inline-block mr-1 w-14 text-center rounded-lg shadow-lg text-xs hover:bg-emerald-700 active:bg-emerald-800">Edit</a>
                    <button id="hapus" data-id="{{ $product->id }}" class="bg-red-500 text-white p-2 w-14 text-center rounded-lg shadow-lg text-xs m-0 hover:bg-red-700 active:bg-red-800" type="button">Hapus</button>
                </td>
            </tr>

            @endforeach

            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

            @endif

        </tbody>
    </table>
</div>

<div class="px-4">{{ $products->links() }}</div>

@if(!$products->isEmpty())

<div id="deleteData">
    @include('product.delete')
</div>

@endif