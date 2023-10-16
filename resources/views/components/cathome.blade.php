<section id="category" class="category py-5 my-5">
    <div class="container-lg">
        <div class="title d-flex position-relative align-items-center flex-wrap justify-content-between reveal">
            <div class="col-lg-2">
                <h3>Kategori Terbaik untuk Anda</h3>
            </div>
            <p class="col-lg-6 col-12 mt-3">
            Kami telah mengelompokkan produk kami ke dalam kategori yang terorganisir dengan baik untuk memudahkan pengalaman berbelanja Anda. Temukan kategori favorit Anda dan temukan produk yang Anda sukai.
            </p>
            <a href="{{route('shop')}}" class="icon px-3 mt-2 py-3 text-bg-primary rounded-lg">
                Discover More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ms-1">
                    <path fill-rule="evenodd"
                        d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <div class="row justify-content-between mt-3 reveal">
            @if(!$tag1)
            <div class="p-3 my-5 text-center text-bg-secondary rounded-full reveal">Tidak ada data kategori!</div>
            @else
            <div class="col-lg-6 col-md-6 col-12 my-2">
                <a class="cat cats d-block text-white overflow-hidden rounded-lg position-relative" href="#">
                    <img src="{{asset('/img/tag/'.$tag1->image)}}" alt="{{$tag1->name}}" width="100%" height="100%"
                        class="rounded-lg" />
                    <div class="position-absolute p-lg-5 p-4 pb-2 d-flex justify-content-between">
                        <div>
                            <h2>{{$tag1->name}}</h2>
                            <p>{{$tag1->product_count}} Items</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            stroke-width="1.2" stroke="currentColor" class="mt-4">
                            <path fill-rule="evenodd"
                                d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </a>
            </div>
            @endif

            @if($tag2)
            <div class="col-lg-6 col-md-6 col-12">
                <div class="col-lg-12 col-md-12 col-12 my-2">
                    <a class="cat d-block text-white overflow-hidden rounded-lg position-relative" href="#">
                        <img src="{{asset('/img/tag/'.$tag2->image)}}" alt="{{$tag2->name}}" width="100%" height="100%"
                            class="rounded-lg" />
                        <div class="position-absolute p-4 pb-2 d-flex justify-content-between">
                            <div>
                                <h2>{{$tag2->name}}</h2>
                                <p>{{$tag2->product_count}} Items</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                stroke-width="1.2" stroke="currentColor" class="mt-4">
                                <path fill-rule="evenodd"
                                    d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </a>
                </div>
                @endif

                <div class="col-lg-12 d-flex col-md-6 col-12 px-0">
                    @if($tag3)
                    <div class="col-6 my-lg-2 my-lg-0 py-2 pe-2">
                        <a class="cat d-block text-white overflow-hidden rounded-lg position-relative" href="#">
                            <img src="{{asset('/img/tag/'.$tag3->image)}}" alt="{{$tag3->name}}" width="100%"
                                height="100%" class="rounded-lg" />
                            <div class="position-absolute p-4 pb-2 d-flex justify-content-between">
                                <div>
                                    <h2>{{$tag3->name}}</h2>
                                    <p>{{$tag3->product_count}} Items</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    stroke-width="1.2" stroke="currentColor" class="mt-4">
                                    <path fill-rule="evenodd"
                                        d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    @endif

                    @if($tag4)
                    <div class="col-6 my-lg-2 my-lg-0 py-2 ps-lg-3 ps-2">
                        <a class="cat d-block text-white overflow-hidden rounded-lg position-relative" href="#">
                            <img src="{{asset('/img/tag/'.$tag4->image)}}" alt="{{$tag4->name}}" width="100%"
                                height="100%" class="rounded-lg" />
                            <div class="position-absolute p-4 pb-2 d-flex justify-content-between">
                                <div>
                                    <h2>{{$tag4->name}}</h2>
                                    <p>{{$tag4->product_count}} Items</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    stroke-width="1.2" stroke="currentColor" class="mt-4">
                                    <path fill-rule="evenodd"
                                        d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>