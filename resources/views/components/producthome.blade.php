<section id="product" class="product py-5 mt-5">
    <div class="container-lg">
        <h3 class="text-center reveal">Top Products</h3>
        <p class="text-center mb-5 px-3 reveal">
            Koleksi produk terbaik kami yang akan membuat ruangan lebih inovatif
        </p>
        @if($products->isEmpty())
        <div class="p-3 my-5 text-center text-bg-secondary rounded-full reveal">Tidak ada data produk!</div>
        @else
        <div class="owl-carousel owl-theme reveal mb-5">
            @foreach($products as $product)
            <div class="card rounded-lg border-0 shadow-none d-flex flex-column justify-content-between overflow-hidden">
                <div class="card-body">
                    <span>{{$product->category->name}}</span>
                    <h2>{{$product->name}}</h2>
                    <p>Rp. {{str_replace(',', '.', number_format($product->price))}}</p>
                </div>
                <img src="{{ asset('/img/product/'.$product->image) }}" style="width: 100%!important;height: auto!important" />
            </div>
            @endforeach
        </div>
        @endif
        <div class="col-12 text-center revealy">
            <a href="{{route('shop')}}" class="text-dark py-3 px-4 rounded-full">Visit Shop
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ms-1" stroke-width="1" stroke="currentColor" width="15">
                    <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>