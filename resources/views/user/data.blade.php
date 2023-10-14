<div class="overflow-x-auto relative px-4 mb-5">
    <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
        <thead class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
            <tr>
                <th scope="col" class="py-3 px-6">#</th>
                <th scope="col" class="py-3 px-6">Nama User</th>
                <th scope="col" class="py-3 px-6">Username</th>
                <th scope="col" class="py-3 px-6">Role</th>
                <th scope="col" class="py-3 px-6">Nomor HP</th>
                <th scope="col" class="py-3 w-40 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @if($users->isEmpty())

            <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6 text-center" colspan="6">Tidak ada data user</td>
            </tr>

            @else

            @foreach($users as $user)

            <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                <td class="py-4 px-6">{{ ++$i }}</td>
                <td class="py-4 px-6">
                    <div class="flex relative items-center">
                        <img src="{{ asset('/img/user/'.$user->photo) }}" alt="{{ $user->name }}"
                            class="w-12 h-12 rounded-full mr-3 object-cover">
                        <span class="flex h-3 w-3 absolute left-9 bottom-1">
                            @if($user->is_active == 1)
                            <span
                                class="animate-ping absolute flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative flex rounded-full h-3 w-3 bg-emerald-500"></span>
                            @else
                            <span
                                class="animate-ping absolute flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative flex rounded-full h-3 w-3 bg-red-500"></span>
                            @endif
                        </span>
                        <div>
                            <p class="font-semibold">{{ $user->name }}</p>
                            <p>{{ $user->email }}</p>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">{{ $user->username }}</td>
                <td class="py-4 px-6">{{ $user->role->name }}</td>
                <td class="py-4 px-6">{{ $user->phone }}</td>
                <td class="py-7 w-40 text-center flex justify-center items-baseline">
                    <a href="{{ route('user.edit', $user->id) }}"
                        class="bg-emerald-500 text-white p-2 inline-block mr-1 w-14 text-center rounded-lg shadow-lg text-xs hover:bg-emerald-700 active:bg-emerald-800">Edit</a>
                    <button id="hapus" data-id="{{ $user->id }}"
                        class="bg-red-500 text-white p-2 w-14 text-center rounded-lg shadow-lg text-xs m-0 hover:bg-red-700 active:bg-red-800"
                        type="button">Hapus</button>
                </td>
            </tr>

            @endforeach

            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

            @endif

        </tbody>
    </table>
</div>

<div class="px-4">{{ $users->links() }}</div>

@if(!$users->isEmpty())

<div id="deleteData">
    @include('user.delete')
</div>

@endif