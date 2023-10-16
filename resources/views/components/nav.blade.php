<nav class="navbar px-lg-0 pt-lg-4 navbar-expand-lg bg-white">
    <div class="container-lg px-lg-0">
        <div class="container-lg row p-0 m-0 justify-content-between align-items-center mx-auto">
            <div class="col-lg-2 col-5 d-flex align-items-center head">
                <a class="toggler icon border-0 p-0" href="javascript::void(0)" data-bs-toggle="collapse"
                    data-bs-target="#navi" aria-controls="navi" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>
                </a>
                <header>
                    <h1>
                        <a href="{{route('home')}}"><span>U</span>M<span>K</span>M<span style="font-size: 28px;">Pro</span></a>
                    </h1>
                </header>
            </div>
            <div class="collapse navbar-collapse col-lg-8 search-wrap" id="searches">
                <form class="bg-body-secondary search position-relative rounded d-flex align-items-center"
                    role="search">
                    <label for="search" class="position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#777">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </label>
                    <input id="search" class="form-control bg-transparent border-0 rounded" type="search"
                        placeholder="Search" aria-label="Search" />
                    <a class="p-0 s-close toggler border-0 position-absolute" href="javascript::void(0)" title="Search"
                        data-bs-toggle="collapse" data-bs-target="#searches" aria-controls="searches"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </form>
            </div>
            <div class="col icons d-flex justify-content-end">
                <a href="{{route('cart')}}" class="px-2" title="Cart">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </a>
                <a href="{{route('wishlist')}}" class="px-lg-1 pl-lg-2 px-2" title="Wishlist">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </a>
                <a class="p-0 s-icon toggler border-0" href="javascript::void(0)" title="Search"
                    data-bs-toggle="collapse" data-bs-target="#searches" aria-controls="searches" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </a>
            </div>
            <div class="collapse navbar-collapse mx-0 mt-3 px-1" id="navi">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-between">
                    <div class="lefto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('shop')}}#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('shop')}}#kategori">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('shop')}}#coupon">Kupon Promo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('shop')}}#produk">Produk Baru</a>
                        </li>
                    </div>
                    <div class="righto">
                        @if($auth)
                        <div class="dropdown">
                            <a class="btn dropdown-toggle d-flex align-items-center mt-1" href="#" role="button"
                                id="userDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('/img/user/'.$auth->photo) }}" width="25" height="25"
                                    class="rounded-circle me-2">
                                <span class="font-normal text-dark">{{ $auth->name }}</span>
                            </a>

                            <ul class="dropdown-menu" style="font-size: 14px!important;" aria-labelledby="userDrop">
                                <li><a class="dropdown-item py-2" href="{{route('shop.profile')}}">Profil</a></li>
                                <li><a class="dropdown-item py-2" href="{{route('shop.transaction')}}">Transaksi</a></li>
                                
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item py-2">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="reg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Login</a>
                        </li>
                        @endif
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>