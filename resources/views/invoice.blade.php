@extends('layouts.app')
@section('title', 'Invoice')
@section('content')
<!-- Card Invoice -->
<div class="container container-invoice">
    <div class="card-invoice">
        <h1 class="judul-invoice text-center">TERIMA KASIH</h1>
        <img class="img-invoice" src="img/thanks.png" alt="">
        <p class="text-invoice text-center">Terima kasih atas bantuan yang telah anda berikan</p>
        <div class="container-card-invoice">
            <div class="card-invoice-transaksi">
                <div class="row">
                    <div class="col-md-6">
                        <p>NO. TRANSAKSI</p>
                        <p>NOMINAL</p>
                        <p>KODE UNIK</p>
                    </div>
                    <div class="col-md-6">
                        <p>2019021200034</p>
                        <p>Rp. 150.000</p>
                        <p>444</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="invoice-transaksi"></div>            
        <div class="container-card-invoice">
            <div class="invoice-total">
                <p class="text-invoice-total">Total</p>
                <p class="num-invoice-total">Rp. 150.444</p>
            </div>
            <p class="text-transfer">Silahkan transfer <span> Rp 150.444 </span> (Nominal + kode unik) transaksi anda akan diverifikasi secara otomatis oleh sistem tanpa perlu konfirmasi ke rekening berikut :</p>
            <div class="invoice-atm">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-atm" src="img/bca.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="tulisan-kanan-invoice">
                            <p class="text-bca">BCA</p>
                            <p class="text-rek">No. Rekening : 0449824144 Atas Nama : Yayasan Al-Hurriyah Bogor</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-transfer-bawah">Pastikan anda melakukan transfer sebelum <span> 16-02-2019 00:00:00 </span> <br> atau transaksi anda akan dibatalkan secara otomatis oleh sistem.</p>
        </div>
    </div>
</div>
<!-- Akhir Card Invoice -->

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