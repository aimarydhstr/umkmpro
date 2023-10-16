@extends('layouts.shop')
@section('content')

@include('components.alertb')
@include('components.nav')

<section id="produk" class="mb-5">
    <div class="container py-2">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Keranjang Belanja</h1>
                                        <h6 class="mb-0 text-muted">{{$count}} Produk</h6>
                                    </div>
                                    <hr class="my-4">

                                    @foreach($carts as $cart)
                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2 col-5">
                                            <img src="{{asset('img/product/'.$cart->product->image)}}" class="img-fluid rounded-3" alt="{{$cart->product->name}}">
                                        </div>
                                        <div class="col-7 col-md-9 col-lg-9 col-xl-9 d-flex p-0 m-0 align-items-center">
                                            <div class="col-md-4 col-lg-4 col-xl-4 mb-md-0 mb-2 ps-2">
                                                <h6 class="text-primary text-uppercase" style="font-size: 13px; font-weight: 600">{{$cart->product->category->name}}</h6>
                                                <h6 class="text-dark mb-0">{{$cart->product->name}}</h6>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-xl-4 d-flex mb-md-0 mb-2 justify-content-center">
                                                <form action="{{ route('cart.updatedown', $cart->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-link text-dark px-2">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </form>

                                                <input name="qty" readonly value="{{ $cart->qty }}" type="number" class="form-control form-control-sm text-center" style="width:50px" />
                                                <form action="{{ route('cart.update', $cart->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-link text-dark px-2">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-xl-4 offset-lg-1">
                                                <h6 class="mb-0">Rp. {{str_replace(',', '.', number_format($cart->price))}}</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <form action="{{ route('cart.destroy', $cart->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn" type="submit"><i class="fa fa-trash"></i></a>
                                            </form>
                                        </div>
                                    </div>

                                    <hr class="my-4">
                                    @endforeach

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="{{route('shop')}}" class="text-body"><i class="fa fa-long-arrow-left me-2"></i>Back to shop</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mt-2 pt-1">Ringkasan</h3>
                                    <hr class="my-4">

                                    <p class="text-uppercase mb-3">Kode Kupon</p>

                                    <div class="my-3">
                                        <div class="form-outline">
                                            <div class="d-flex">
                                                <form class="d-flex" action="{{route('couponused.add')}}" method="post">
                                                    @csrf
                                                    <input type="text" id="kupon" name="code" class="form-control" />
                                                    <button class="btn btn-secondary ms-2">Submit</button>
                                                </form>
                                            </div>
                                            <label class="form-label mt-2 text-muted" for="kupon">Masukkan kode kupon</label>
                                        </div>
                                    </div>

                                    <hr class="my-4">
                                    
                                    <div class="d-flex justify-content-between mb-0">
                                        <p class="text-capitalize">Subtotal</p>
                                        <p>Rp. {{str_replace(',', '.', number_format($price))}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-capitalize">Diskon</p>
                                        <p>Rp. {{str_replace(',', '.', number_format($discount))}}</p>
                                    </div>
                                    <hr class="my-2 mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-capitalize">Total Harga</p>
                                        <p>Rp. {{str_replace(',', '.', number_format($total))}}</p>
                                    </div>
                                    <div class="justify-content-center d-flex mt-5">
                                        
                                        <button type="button" class="px-4 border-0 py-3 d-flex align-items-center me-2 text-bg-primary rounded"
                                                style="font-size: 14px" data-bs-toggle="modal" data-bs-target="#bayar">
                                                Bayar Sekarang
                                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="bayar" tabindex="-1" aria-labelledby="bayarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bayarLabel">Pembayaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{route('transaction.add')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
          <div class="p-3 shadow mb-3" style="line-height: 1.7em;">
              Nomor Rekening : 
              <ul>
                  <li>BCA : 9137-141-212-178</li>
                  <li>BRI : 1361-824-912-731</li>
                  <li>BNI : 8653-127-312-314</li>
              </ul>
          </div>
          
          <label for="pay_image" class="mt-3" style="cursor:pointer">Upload Bukti Transfer</label>

          <div class="mb-4 mt-3 d-flex justify-content-center border shadow">
                <label for="pay_image" style="cursor:pointer">
                <img id="output" src="https://www.lifewire.com/thmb/TRGYpWa4KzxUt1Fkgr3FqjOd6VQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg" alt="" style="width: 300px;" />
                </label>
            </div>
        <div class="d-flex justify-content-center">
            <div class="btn btn-primary btn-rounded">
                <label class="form-label text-white m-1 p-0" for="pay_image" style="cursor:pointer">Choose file</label>
                <input id="pay_image" type="file" name="pay_image" required class="form-control d-none" onchange="loadFile(event);"/>
                @error('pay_image')
                    <div class="alert alert-primary mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>
            <input type="hidden" name="subtotal" value="{{$price}}">
            <input type="hidden" name="discount" value="{{$discount}}">
            <input type="hidden" name="total" value="{{$total}}">
            @if($coupon)
            <input type="hidden" name="coupon_used_id" value="{{$coupon->id}}">
            @endif

        </div>
        <div class="modal-footer">
            <button type="submit" class="px-3 border-0 d-flex align-items-center me-2 text-bg-primary rounded"
                    style="font-size: 14px;padding: 12px;" data-bs-toggle="modal" data-bs-target="#bayar">
                    Bayar Sekarang
                <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                </svg>
            </button>
        </div>
    </form>
    </div>
  </div>
</div>


<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

@include('components.footerhome')

@endsection