<aside class="w-72 fixed top-0 -left-72 sm:left-0 bottom-0 shadow-2xl transition-all duration-300" id="sidebar">
    <div class="h-screen relative pt-6 bg-white pb-32 box-border overflow-hidden dark:bg-slate-700">
        <header class="flex justify-center mb-6 px-3">
            <h1 class="text-xl font-semibold whitespace-nowrap text-slate-600 dark:text-white"><a
                    href="{{ route('dashboard') }}">Seller | UMKMPro</a></h1>
        </header>

        <nav class="overflow-hidden hover:overflow-y-scroll h-full pb-3">
            <ul class="space-y-3">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="{{ Request::routeIs('dashboard.*') || Request::routeIs('dashboard') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-600 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>

                <li>
                    <p
                        class="pt-5 pb-1 px-5 mt-3 border-t dark:border-slate-600 uppercase text-slate-400 text-xs font-semibold">
                        Manajemen Toko</p>
                </li>


                <li>
                    <a href="{{ route('category') }}"
                        class="{{ Request::routeIs('category.*') || Request::routeIs('category') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-600 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                        <svg fill="currentColor" class="w-6 h-6" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M25.994 16.144l-12.225-12.225-11.769 0.045 0.018 10.831 12.662 12.662c0.794 0.795 2.072 0.806 2.854 0.024l8.484-8.485c0.781-0.781 0.771-2.058-0.024-2.852zM7.081 10.952c-1.104 0-2-0.896-2-2s0.896-2 2-2c1.105 0 2 0.896 2 2s-0.895 2-2 2zM28.846 16.168l-12.225-12.225-1.471 0.005 12.27 12.207c0.795 0.795 0.805 2.071 0.023 2.853l-8.484 8.485c-0.207 0.207-0.451 0.354-0.709 0.451 0.721 0.277 1.561 0.135 2.135-0.438l8.486-8.485c0.781-0.782 0.77-2.059-0.025-2.853z">
                                </path>
                            </g>
                        </svg>
                        <span class="ml-3">Kategori</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('coupon') }}"
                        class="{{ Request::routeIs('coupon.*') || Request::routeIs('coupon') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-600 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                        </svg>

                        <span class="ml-3">Kupon</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('product') }}"
                        class="{{ Request::routeIs('product.*') || Request::routeIs('product') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-600 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                        <svg fill="currentColor" class="w-6 h-6" viewBox="-5.55 0 122.88 122.88" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            style="enable-background:new 0 0 111.78 122.88" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M20.27,104.92c-1.86,0.9-4.09,0.12-4.98-1.74c-0.9-1.86-0.12-4.09,1.74-4.98c4.5-2.17,8.98-3.96,13.43-5.37 c4.48-1.42,8.99-2.46,13.53-3.12c2.31-0.34,4.62-0.57,6.93-0.71V85.3l-10.99-8.18c-0.4-0.53-0.69-1.13-0.86-1.76H21.68l0,0v-0.02 c-3.74,0-7.12-1.51-9.56-3.95c-2.44-2.44-3.95-5.82-3.95-9.56H8.15v0V45.47h-3.5h0v-0.02c-1.28,0-2.45-0.52-3.28-1.36 c-0.83-0.83-1.34-1.98-1.35-3.25L0,40.83v0h0.01v-3.82H0l0,0h0.01c0-1.29,0.52-2.45,1.36-3.28c0.83-0.83,1.98-1.34,3.25-1.35 l0.01-0.01h0h16.69h0v0.01c1.29,0,2.45,0.52,3.28,1.35v0.01c0.83,0.83,1.34,1.98,1.35,3.25l0.01,0.02v0h-0.01v3.82h0.01v0h-0.01 c0,1.29-0.52,2.46-1.35,3.28H24.6c-0.83,0.83-1.98,1.34-3.25,1.34l-0.02,0.02h0h-4.46v16.35v0h-0.02c0,1.3,0.55,2.5,1.43,3.39 c0.88,0.88,2.08,1.43,3.39,1.43v-0.02l0,0h2.86v-7.89c0-3.35,2.95-6.09,6.54-6.09H79.1c3.6,0,6.54,2.74,6.54,6.09v7.89h2.86h0v0.02 c1.3,0,2.51-0.55,3.39-1.43c0.88-0.88,1.43-2.09,1.43-3.39h-0.02v0V45.47h-2.86h0v-0.02c-1.28,0-2.44-0.52-3.28-1.36 c-0.83-0.83-1.34-1.98-1.35-3.25l-0.01-0.02v0h0.01v-3.82H85.8l0,0h0.01c0-1.29,0.53-2.45,1.36-3.28c0.83-0.83,1.98-1.34,3.25-1.35 l0.02-0.01h0h16.69h0v0.01c1.29,0,2.45,0.52,3.28,1.35v0.01c0.83,0.83,1.34,1.98,1.35,3.25l0.01,0.02v0h-0.01v3.82h0.01v0h-0.01 c0,1.28-0.52,2.45-1.36,3.28c-0.83,0.83-1.98,1.34-3.25,1.34l-0.01,0.02h0h-5.1v16.35v0h-0.02c0,3.74-1.51,7.12-3.95,9.56 c-2.44,2.44-5.82,3.95-9.56,3.95v0.02h0H71.56c-0.17,0.77-0.51,1.5-1,2.13l-10.92,7.45v4.05c3.02,0.16,6.03,0.5,9.05,1.02 c8.22,1.41,16.41,4.13,24.59,8.2c1.85,0.92,2.6,3.16,1.68,5.01c-0.92,1.85-3.16,2.6-5.01,1.68c-7.52-3.75-15.03-6.25-22.51-7.53 c-2.6-0.44-5.2-0.74-7.79-0.9v7.17c0,2.41-1.95,4.36-4.36,4.36c-2.41,0-4.36-1.95-4.36-4.36v-7.15c-1.96,0.12-3.92,0.33-5.88,0.61 c-4.08,0.59-8.2,1.55-12.33,2.86C28.54,101.28,24.39,102.93,20.27,104.92L20.27,104.92z M27.84,0h54.5c1.81,0,3.44,1.49,3.28,3.28 l-4.5,42.37c-0.19,1.79-1.48,3.28-3.28,3.28H32.56c-1.8,0-3.12-1.48-3.28-3.28L24.56,3.28C24.4,1.49,26.04,0,27.84,0L27.84,0z M50.22,75.36h10.15H50.22L50.22,75.36z M91.96,110.1c3.53,0,6.39,2.86,6.39,6.39c0,3.53-2.86,6.39-6.39,6.39 c-3.53,0-6.39-2.86-6.39-6.39C85.57,112.96,88.43,110.1,91.96,110.1L91.96,110.1z M55.48,110.1c3.53,0,6.39,2.86,6.39,6.39 c0,3.53-2.86,6.39-6.39,6.39s-6.39-2.86-6.39-6.39C49.09,112.96,51.95,110.1,55.48,110.1L55.48,110.1z M19,110.1 c3.53,0,6.39,2.86,6.39,6.39c0,3.53-2.86,6.39-6.39,6.39c-3.53,0-6.39-2.86-6.39-6.39C12.61,112.96,15.47,110.1,19,110.1L19,110.1z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-3">Produk</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('tag') }}"
                        class="{{ Request::routeIs('tag.*') || Request::routeIs('tag') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-600 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                        </svg>
                        <span class="ml-3">Tag</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('transaction') }}"
                        class="{{ Request::routeIs('transaction.*') || Request::routeIs('transaction') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-600 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                        </svg>
                        <span class="ml-3">Transaksi</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user') }}"
                        class="{{ Request::routeIs('user.*') || Request::routeIs('user') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-600 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                        </svg>
                        <span class="ml-3">User</span>
                    </a>
                </li>

                <li>
                    <p
                        class="pb-1 px-5 mt-3 border-t dark:border-slate-600 uppercase text-slate-400 text-xs font-semibold">
                    </p>
                </li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="text-slate-600 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500 flex items-center p-3 mx-2 w-64">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            <span class="flex-1 ml-3 grow whitespace-nowrap text-left">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>

        <div class="flex items-center relative py-4 px-5 bg-slate-600 absolute bottom-0 w-full">
            <img src="{{ asset('/img/user/'.$auth->photo) }}" alt="{{ $auth->name }}"
                class="w-10 h-10 mt-1 object-cover rounded-full mr-3">
            <span class="flex h-3 w-3 absolute left-12 bottom-5">
                <span class="animate-ping absolute flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative flex rounded-full h-3 w-3 bg-emerald-500"></span>
            </span>
            <p class="grow truncate overflow-hidden">
                <span class="text-slate-100 text-sm block font-semibold">{{ $auth->name }}</span>
                <span class="text-slate-300 text-xs block">{{ $auth->role->name }} Mebelicious</span>
            </p>
            <button id="toggle" title="Aktifkan Dark Mode"
                class="text-white bg-slate-200 bg-slate-500 hover:bg-slate-800 active:bg-slate-900 rounded-full text-sm p-2 focus:outline-none">
                <svg id="dark" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="light" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

    </div>
</aside>

<script type="module">
$(document).ready(() => {
    $(document).on('click', '#navIcon', function(e) {
        e.preventDefault()
        $('#sidebar').removeClass('sm:left-0')
        $('#sidebar').removeClass('-left-72')
        $('#sidebar').addClass('sm:-left-72')
        $('#sidebar').addClass('left-0')

        $('#main').removeClass('left-0')
        $('#main').removeClass('sm:left-72')
        $('#main').removeClass('right-72')
        $('#main').removeClass('sm:right-0')

        $('#main').addClass('left-72')
        $('#main').addClass('-right-72')
        $('#main').addClass('sm:left-0')
        $('#main').addClass('sm:right-0')
        $(this).attr('id', 'navIconClose')
    })
    $(document).on('click', '#navIconClose', function(e) {
        e.preventDefault()
        $('#sidebar').addClass('sm:left-0')
        $('#sidebar').addClass('-left-72')
        $('#sidebar').removeClass('sm:-left-72')
        $('#sidebar').removeClass('left-0')


        $('#main').addClass('right-0')
        $('#main').addClass('left-0')
        $('#main').addClass('sm:left-72')

        $('#main').removeClass('left-72')
        $('#main').removeClass('-right-72')
        $('#main').removeClass('sm:left-0')

        $(this).attr('id', 'navIcon')
    })
})
</script>