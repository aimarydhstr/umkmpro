<div id="editModal" tabindex="-1" aria-hidden="true" class="w-screen h-screen flex items-center justify-center bg-slate-800 bg-opacity-75 fixed top-0 left-0 right-0 bottom-0 hidden overflow-y-auto py-7">
    <div class="relative w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" id="batalEdit" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                    Edit Kupon
                </h3>
            </div>

            <form action="{{ route('coupon.update', $coupon->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="p-6">
                    <div class="pt-0">
                        <label for="name">Nama Kupon</label>
                        <input name="name" id="name" type="text" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600" placeholder="Nama kupon..." required autofocus value="{{ $coupon->name }}">
                        @if($errors->has('name'))
                        <div class="text-red-500">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="description">Deskripsi Kupon</label>
                        <textarea name="description" id="description" rows="3" 
                            class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600"
                            placeholder="Deskripsi kupon..." required autofocus>{{ $coupon->description }}</textarea>
                        @if($errors->has('description'))
                        <div class="text-red-500">{{ $errors->first('description') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="code">Kode Kupon</label>
                        <input name="code" id="code" type="text" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600" placeholder="Kode kupon..." required autofocus value="{{ $coupon->code }}">
                        @if($errors->has('code'))
                        <div class="text-red-500">{{ $errors->first('code') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="discount">Diskon Kupon</label>
                        <input name="discount" id="discount" type="number" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600" placeholder="Diskon (%)..." required autofocus value="{{ $coupon->discount }}">
                        @if($errors->has('discount'))
                        <div class="text-red-500">{{ $errors->first('discount') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="started_at">Tanggal Mulai</label>
                        <input name="started_at" id="started_at" type="datetime-local" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600" placeholder="Tanggal Mulai..." required autofocus value="{{ $coupon->started_at }}">
                        @if($errors->has('started_at'))
                        <div class="text-red-500">{{ $errors->first('started_at') }}</div>
                        @endif
                    </div>
                    <div class="pt-3">
                        <label for="finished_at">Tanggal Berakhir</label>
                        <input name="finished_at" id="finished_at" type="datetime-local" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600" placeholder="Tanggal Berakhir..." required autofocus value="{{ $coupon->finished_at }}">
                        @if($errors->has('finished_at'))
                        <div class="text-red-500">{{ $errors->first('finished_at') }}</div>
                        @endif
                    </div>
                </div>
                <div class="px-6 py-4 border-t dark:border-gray-600 flex justify-end">
                    <button class="px-4 py-2 bg-violet-500 rounded text-white" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>