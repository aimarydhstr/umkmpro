<nav class="navbar navbar-expand-lg fade-top" id="navbar">
    <div class="container-lg d-flex justify-content-between">
        <div class="d-flex">
            <a class="position-relative btn-nav mt-1 me-3" href="javascript::void(0)" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-button"></span>
            </a>
            <h1><a href="{{route('home')}}">{{ config('app.name') }}</a></h1>
        </div>
        <div class="collapse navbar-collapse nav" id="nav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#category">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reason">Benefits</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            @if(!$auth)
            <a href="{{ route('login') }}" class="l-btn text-bg-danger rounded-full">Login</a>
            @else
            <div class="dropdown">
                <a class="btn dropdown-toggle d-flex align-items-center mt-1" href="#" role="button" id="userDrop" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('/img/user/'.$auth->photo) }}" width="25" height="25" class="rounded-circle me-2">
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
            @endif
        </div>
    </div>
</nav>