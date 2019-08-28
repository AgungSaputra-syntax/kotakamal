@extends('layouts.app')
@section('title', 'Sedekah')
@section('content')
<!-- Background img -->
<div class="bg-sedekah">
    <img src="{{ asset('img/bg-sedekah.png') }}" alt="">
</div>
    <!-- Akhir Background img -->


    <!-- sedekah -->
    <div class="container">
        <div class="border-atas-sedekah">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card card-atas-sedekah">
                        <div class="card-body text-center">
                            <img class="logosedekah" src="img/logosedekah.png">
                            <h5 class="card-title card-title-sedekah">SEDEKAH</h5>
                            <p class="card-text card-text-sedekah">Program Sedekah meliputi Program Pembibitan Penghafal Al-Quran </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card card-atas-sedekah-1">
                        <a href="zakat.html">
                            <div class="card-body text-center">
                                <img class="logosedekah" src="img/logouangweb.png">
                                <h5 class="card-title card-title-sedekah">ZAKAT</h5>
                                <p class="card-text card-text-sedekah">Sucikan Harta, Mersihkan Jiwa, Tumbuhkan Kasih Sayang terhadap Sesama</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Sedekah -->

    <!-- Pembayaran Sedekah -->
    <div class="container">
        <div class="border-sedekah">
            <h3>Pembayaran Sedekah</h3>
        </div>
    </div>
    <!-- Pembayaran Sedekah -->

    <!-- Form Pembayaran Sedekah -->
    <div class="container">
        <div class="card card-bawah-sedekah">
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label class="title-sedekah"for="exampleFormControlInput1">Masukkan Nominal Sedekah</label>
                            <div class="nom">
                                <div class="nom__dropdown">
                                    <div class="nom__dropdown__field">
                                        <span>Rp </span>
                                        <input type="text" id="nom-input" class="nom__dropdown__field__input" value="50.000" placeholder="Masukan Nominal" readonly>
                                    </div>
                                    <div class="nom__dropdown__btn">
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                    <div class="nom__dropdown__list-wrapper">
                                        <button value="50.000" class="ro-true">Rp 50.0000</button>
                                        <button value="100.000" class="ro-true">Rp 100.0000</button>
                                        <button value="500.000" class="ro-true">Rp 500.0000</button>
                                        <button value="1.000.000" class="ro-true">Rp 1.000.0000</button>
                                        <button value="" class="ro-false"><label for="nom-input">Nominal Lainnya</label></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-nominal">Minimal Sedekah Rp. 50.000,-</p>
                        <div class="form-group">
                            <input type="text" class="form-control form-sedekah-1" id="exampleFormControlInput1" placeholder="Nomor Telepon">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-sedekah-1" id="exampleFormControlInput1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-sedekah-1" id="exampleFormControlInput1" placeholder="Atas Nama">
                        </div>
                        <div class="form-check check-sedekah">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label check-label-sedekah" for="defaultCheck1">
                                Tampilkan sebagai Hamba Allah
                            </label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label class="title-sedekah" for="inputTransfer">Transfer Melalui</label>
                            <select class="form-control form-sedekah" id="inputTransfer">
                                <option disabled selected>Pilih Bank</option>
                                <option>BANK BCA</option>
                                <option>BANK BNI</option>
                                <option>CIMB NIAGA</option>
                                <option>BANK MANDIRI</option>
                                <option>BANK BRI</option>
                            </select>
                            </div>
                        <div class="form-group">
                            <label class="title-doa"  for="exampleFormControlTextarea1">Doa Terbaik Anda</label>
                            <textarea class="form-control control-sedekah" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <form action="/invoice">
                    <div class="text-center">
                        <button type="submit" class="btn btn-sedekah-1">Sedekah Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Form Pembayaran Sedekah -->

    <!-- Border Bawah Index -->
    <div class="border-bawah-index">
        <div class="row row-index">
            <div class="col-md-12 col-lg-3">
                <span>BERLANGGANAN BERITA DENGAN KOTAKAMAL</span>
            </div>
            <div class="col-md-9 col-lg-7">
                <input type="email" class="form-border-dalam-index" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email Anda Disini">
            </div>
            <div class="col-md-3 col-lg-2">
                <button type="button" class="btn btn-border-bawah-index">BERLANGGANAN</button>
            </div>
        </div>
        
    </div>
    <!-- Akhir Border Bawah Index -->
@endsection