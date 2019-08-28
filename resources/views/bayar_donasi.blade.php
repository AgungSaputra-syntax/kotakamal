@extends('layouts.app')
@section('title', 'Bayar Donasi')
@section('content')
<!-- Background img -->
<div class="container">
    <div class="image-donasi" style="background-image:url(img/masjid-bangun.png)";>
        <div class="image-blur" style="background-image:url(img/masjid-bangun.png)"></div>
        <div class="text-blur-img-donasi">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <p class="text-donasi-kiri">Wakaf Bangun Pesantren Tahfidz Putra di Kalteng</p>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="col-kanan-donasi">
                        <div class="col-kanan-atas">
                            <span class="text-col-kanan-atas">Terkumpul</span>
                            <span class="num-col-kanan-atas">RP. 12.000.000,-</span>
                        </div>
                        <div class="col-kanan-atas">
                            <span class="text-col-kanan-atas">Donatur</span>
                            <span class="num-col-kanan-atas">135</span>
                        </div>
                        <div class="col-kanan-atas">
                            <span class="text-col-kanan-atas">Durasi</span>
                            <span class="num-col-kanan-atas">2 Hari Lagi</span>
                        </div>
                    </div>
                    <div class="progress-bar-donasi">
                    <div class="progress progress-bawah-donasi">
                        <div class="progress-bar progress-atas-donasi" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">83%</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Background img -->
</div>

<!-- Pembayaran Sedekah -->
<div class="container">
<div class="border-donasi">
    <h3>Donasi Program</h3>
</div>
</div>
<!-- Pembayaran Sedekah -->

<!-- Form Pembayaran Sedekah -->
<div class="container">
<div class="card card-bawah-donasi">
    <div class="card-body">
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label class="title-donasi"for="exampleFormControlInput1">Masukkan Nominal Sedekah</label>
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
                    <input type="text" class="form-control form-donasi-1" id="exampleFormControlInput1" placeholder="Nomor Telepon">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-donasi-1" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-donasi-1" id="exampleFormControlInput1" placeholder="Atas Nama">
                </div>
                <div class="form-check check-donasi">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label check-label-donasi" for="defaultCheck1">
                        Tampilkan sebagai Hamba Allah
                    </label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label class="title-sedekah" for="inputTransfer">Transfer Melalui</label>
                    <select class="form-control form-donasi" id="inputTransfer">
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
                    <textarea class="form-control control-donasi" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-check check-donasi-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label check-label-donasi" for="defaultCheck2">
                        Ingatkan saya untuk sedekah setiap bulan
                    </label>
                </div>
            </div>
        </div>
        <form action="/invoice">
            <div class="text-center">
                <button type="submit" class="btn btn-donasi-1">Sedekah Sekarang</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- Akhir Form Pembayaran Sedekah -->
@endsection