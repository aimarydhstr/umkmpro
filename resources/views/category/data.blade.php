<div class="overflow-x-auto relative px-4 mb-5">
    <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
        <thead class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
            <tr>
                <th scope="col" class="py-3 px-6">#</th>
                <th scope="col" class="py-3 px-6">Nama Kategori</th>
                <th scope="col" class="py-3 px-6">Slug</th>
                <th scope="col" class="py-3 w-40 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @if($categories->isEmpty())

            <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6 text-center" colspan="4">Tidak ada data kategori</td>
            </tr>

            @else

            @foreach($categories as $category)
            <tr valign="middle" class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6">{{ ++$i }}</td>
                <td class="py-7 px-6 flex items-center">
                    <img class="w-5 h-5 mr-1 dark:invert" src="{{ asset('/img/category/'.$category->icon) }}" alt="Kategori {{ $category->name }}" colorscheme="glyph">{{ $category->name }}
                </td>
                <td class="py-4 px-6">{{ $category->slug }}</td>
                <td class="py-4 w-40 text-center flex justify-center">
                    <button type="button" id="edit" data-id="{{ $category->id }}" class="bg-emerald-500 text-white p-2 m-0 mr-1 w-14 text-center rounded-lg shadow-lg text-xs hover:bg-emerald-700 active:bg-emerald-800">Edit</button>
                    <button id="hapus" data-id="{{ $category->id }}" class="bg-red-500 text-white p-2 w-14 text-center rounded-lg shadow-lg text-xs m-0 hover:bg-red-700 active:bg-red-800" type="button">Hapus</button>
                </td>
            </tr>

            @endforeach

            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

            @endif

        </tbody>
    </table>
</div>

<div class="px-4">{{ $categories->links() }}</div>

@if(!$categories->isEmpty())

<div id="editData">
    @include('category.edit')
</div>

<div id="deleteData">
    @include('category.delete')
</div>

@endif