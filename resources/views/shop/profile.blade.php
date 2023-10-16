@extends('layouts.shop')
@section('content')

@include('components.alertb')
@include('components.nav')

<section class="gradient-custom-2 mt-5 mt-md-0">
    <div class="container py-3 pb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-lg-9 col-xl-9">
                <div class="card">
                    <form action="{{route('shop.updateProfile', $auth->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="rounded-top text-white d-flex flex-row bg-primary" style="height:180px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <label for="photo" style="cursor:pointer" title="Ganti Foto">
                                    <img src="{{asset('/img/user/'.$auth->photo)}}" alt="{{$auth->name}}" class="img-fluid img-thumbnail rounded-circle mt-4 mb-2" style="width: 150px; z-index: 1">
                                </label>
                                <input type="file" name="photo" id="photo">
                                <label for="photo" class="btn btn-outline-primary" style="z-index: 1;">
                                    Ganti Foto
                                </label>
                            </div>
                            <div class="ms-3" style="margin-top: 110px;">
                                <h5>{{$auth->name}}</h5>
                                <p>{{$auth->email}}</p>
                            </div>
                        </div>
                        <div class="p-4 pb-5 text-black">
                        </div>
                        <div class="card-body p-4 text-black mt-5 border-top">
                            <div class="row justify-content-between">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control rounded mt-3" name="name" id="name" value="{{$auth->name}}">
                                </div>
                                <div class="form-group col-12 col-md-6 pt-4 pt-md-0">
                                    <label for="email">Email</label>
                                    <input type="email" readonly class="form-control rounded mt-3" name="email" id="email" value="{{$auth->email}}">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" readonly class="form-control rounded mt-3" name="username" id="username" value="{{$auth->username}}">
                                </div>
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="passwordold">Password Lama</label>
                                    <input type="password" class="form-control rounded mt-3" name="passwordold" id="passwordold">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="password">Password Baru</label>
                                    <input type="password" class="form-control rounded mt-3" name="password" id="password">
                                </div>
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="password_confirmation">Ulangi Password Baru</label>
                                    <input type="password" class="form-control rounded mt-3" name="password_confirmation" id="password_confirmation">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select class="form-control rounded mt-3" name="gender" id="gender">
                                        @if($auth->gender == 'Perempuan')
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                        @else
                                        <option value="Laki-Laki" selected>Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="province">Provinsi</label>
                                    <input type="text" class="form-control rounded mt-3" name="province" id="province" value="{{$auth->province->name}}">
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="city">Kota</label>
                                    <input type="text" class="form-control rounded mt-3" name="city" id="city" value="{{$auth->city->name}}">
                                </div>
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="address">Alamat</label>
                                    <textarea rows="3" class="form-control rounded mt-3" name="address" id="address">{{$auth->address}}</textarea>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="postcode">Kode Pos</label>
                                    <input type="text" class="form-control rounded mt-3" name="postcode" id="postcode" value="{{$auth->postcode}}">
                                </div>
                                <div class="form-group pt-4 col-12 col-md-6">
                                    <label for="phone">Nomor HP</label>
                                    <input type="text" class="form-control rounded mt-3" name="phone" id="phone" value="{{$auth->phone}}">
                                </div>
                            </div>
                            <div class="form-group pt-4 pb-3 text-end">
                                <button class="btn btn-primary px-4" type="submit">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@include('components.footerhome')

@endsection