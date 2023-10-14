<div id="editModal" tabindex="-1" aria-hidden="true" class="w-screen h-screen flex items-center justify-center bg-slate-800 bg-opacity-75 fixed top-0 left-0 right-0 bottom-0 hidden py-7">
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
                    Edit Tag
                </h3>
            </div>

            <form action="{{ route('tag.update', $tag->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="p-6">
                    <div class="relative text-slate-800 border border-slate-300 dark:border-gray-600 rounded-lg" id="dataFoto">
                        <img src="{{ asset('/img/tag/'.$tag->image) }}" alt="{{ $tag->name }}" class="cursor-point w-full rounded-lg max-h-64">
                        <div id="labelFoto" class="flex justify-center items-center hidden absolute top-0 bottom-0 w-full">
                            <label for="foto" class="flex flex-col justify-center items-center w-full h-full bg-slate-50 rounded-lg border-2 border-slate-300 border-dashed cursor-pointer dark:hover:bg-slate-500 dark:bg-slate-600 hover:bg-slate-100 dark:border-slate-500 dark:hover:border-slate-400 relative">
                                <div class="flex flex-col justify-center items-center pt-3 pb-6">
                                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <center>
                                        <p class="text-sm text-slate-500 dark:text-slate-400 px-1">
                                            <strong>Upload gambar tag</strong>
                                        </p>
                                    </center>
                                </div>
                                <input id="foto" type="file" class="hidden" name="image" value="{{ $tag->image }}">
                                <p class="hidden absolute text-xs text-slate-500 dark:text-slate-400 bottom-0 py-1 px-5 border-t left-0 right-0 text-center overflow-hidden truncate" id="namaFoto"></p>
                            </label>
                        </div>
                        @if($errors->has('image'))
                        <div class="text-red-500">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                    <div class="grow pt-3">
                        <label for="name">Nama Tag</label>
                        <input name="name" id="name" type="text" class="p-3 focus:outline-none focus:ring focus:ring-violet-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600" placeholder="Nama Tag..." required autofocus value="{{ $tag->name }}">
                        @if($errors->has('name'))
                        <div class="text-red-500">{{ $errors->first('name') }}</div>
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