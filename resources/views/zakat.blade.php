@extends('layouts.app')
@section('title', 'Kotakamal')
@section('content')
<!-- bg-zakat -->
<div class="bg-zakat">
    <img src="{{ asset('img/bgzakat.png') }}" alt="">
</div>
<!-- Akhir bg-zakat -->

<!-- Card Atas Zakat -->
<div class="container">
    <div class="border-atas-zakat">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card card-atas-zakat">
                    <a href="sedekah.html">
                        <div class="card-body text-center">
                            <img class="logosedekah" src="img/logosedekah.png">
                            <h5 class="card-title card-title-zakat">SEDEKAH</h5>
                            <p class="card-text card-text-zakat">Program Sedekah meliputi Program Pembibitan Penghafal Al-Quran </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card card-atas-zakat-1">
                    <div class="card-body text-center">
                        <img class="logosedekah" src="img/logouangweb.png">
                        <h5 class="card-title card-title-zakat">ZAKAT</h5>
                        <p class="card-text card-text-zakat">Sucikan Harta, Mersihkan Jiwa, Tumbuhkan Kasih Sayang terhadap Sesama</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Card Atas Zakat -->

<!-- Border Atas Index -->
<div class="border-atas-zakat-1">
    <div class="container">
        <div class="border-zakat">
            <div class="border-dalam-zakat">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-md-zakat">
                        <div class="logo-dalam-kiri-zakat">
                            <img class="img-border-zakat" src="img/indonesian-rupiah.png" alt="">
                            <div class="text-dalam-kiri-zakat">
                                <div class="text-isi-kiri-zakat">TOTAL SELURUH PROGRAM SEDEKAH</div>
                                <div class="num-isi-kiri-zakat">Rp. 128.721.982</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="logo-dalam-kanan-zakat">
                            <img class="img-border" src="img/user1.png" alt="">
                            <div class="text-dalam-kanan-zakat">
                                <div class="text-isi-kanan-zakat">DONATUR</div>
                                <div class="num-isi-kanan-zakat">34.239</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Border Atas Index -->


<!-- Text Tunaikan Zakat -->
<div class="container">
    <div class="tunaikan-zakat text-center">
        <h3 class="judul-tunaikan-zakat">TUNAIKAN ZAKAT ANDA</h3>
        <span class="text-tunaikan-zakat">Lakukan kewajiban anda untuk berzakat yang mudah secara online. Kami membantu anda untuk menghitung nilai zakat yang perlu dibayarkan atau anda dapat langsung zakat sekarang.</span>
    </div>
</div>
<!-- Akhir Text Tunaikan Zakat -->


<!-- Nav Tabs -->
<div class="container">
    <div class="nav-tabs-zakat">
        <nav>
            <div class="row nav nav-tabs text-center" id="nav-tab" role="tablist">
                <a class="col-md-3 nav-item nav-link nav-link-pembayaran active" id="nav-profesi-tab" data-toggle="tab" href="#nav-profesi" role="tab" aria-controls="nav-profesi" aria-selected="true">Zakat Profesi</a>
                <a class="col-md-3 nav-item nav-link nav-link-pembayaran" id="nav-perdagangan-tab" data-toggle="tab" href="#nav-perdagangan" role="tab" aria-controls="nav-perdagangan" aria-selected="false">Zakat Perdagangan</a>
                <a class="col-md-3 nav-item nav-link nav-link-pembayaran" id="nav-emas-dan-perak-tab" data-toggle="tab" href="#nav-emas-dan-perak" role="tab" aria-controls="nav-emas-dan-perak" aria-selected="false">Zakat Emas dan Perak</a>
                <a class="col-md-3 nav-item nav-link nav-link-pembayaran" id="nav-simpanan-tab" data-toggle="tab" href="#nav-simpanan" role="tab" aria-controls="nav-simpanan" aria-selected="false"> Zakat Simpanan</a>
            </div>
        </nav>
        <div class="tab-content tab-content-all-zakat" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-profesi" role="tabpanel" aria-labelledby="nav-profesi-tab">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-zakat-kanan">
                    <div class="col-kanan-zakat">
                        <h4>Zakat Profesi</h4>
                        <p class="text-zakat">Zakat harta yang diperoleh dengan cara bekerja atau melakukan suatu profesi <br> yang dikeluarkan jika sudah mencapai haul (1 tahun)</p>
                        <label class="lbl-kal">Nisab Zakat</label>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-dalam-zakat">Harga Beras Saat Ini</h6>
                                <p class="num-dalam-zakat">Rp. 10.000,-</p>
                                    <br>
                                <h6 class="text-dalam-zakat">NISHAB Beras (520 kg)</h6>
                                <p class="num-dalam-zakat">Rp. 5.200.000,-</p>
                                    <br>
                                <p class="text-bawah-paragraf">*Sumber Beras : BPS Pusat</p>
                                <p class="text-bawah-paragraf">*Sumber Beras : Gold Price</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-dalam-zakat">Harga Emas Saat Ini</h6>
                                <p class="num-dalam-zakat">Rp. 601.111,-</p>
                                    <br>
                                <h6 class="text-dalam-zakat">NISHAB Beras (520 kg)</h6>
                                <p class="num-dalam-zakat">Rp. 5.200.000,-</p>
                            </div>
                        </div>
                        <p class="parg-bawah">Anda dapat menghitung nilai zakat di kalkulator zakat atau langsung <br> zakat sekarang</p>
                        <form action="/bayar_zakat_profesi">
                            <button type="submit" class="btn btn-zakat d-md-none d-lg-block">ZAKAT SEKARANG</button>
                        </form>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="col-zakat-kiri">
                        <h6 class="text-kalkulator">Kalkulator Zakat Penghasilan</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Perbulan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Pertahun</label>
                        </div>
                        <div class="kalkulator-zakat">
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Penghasilan Perbulan</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Pendapatan Lain (Optional)</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Hutang / Cicilan (Opsional)</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                        </div>
                        <h6 class="text-kiri-kalkulator">Zakat Yang Dikeluarkan </h6>
                        <p class="num-kiri-zakat">Rp. 0</p>
                        <form action="/bayar_zakat_profesi">
                            <button type="button" class="btn btn-zakat d-md-block d-lg-none">ZAKAT SEKARANG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-perdagangan" role="tabpanel" aria-labelledby="nav-perdagangan-tab">
            <div class="row">
                <div class="col-lg-6 col-md-12-zakat-kanan">
                    <div class="col-kanan-zakat">
                        <h4>Zakat Perdagangan</h4>
                        <p class="text-zakat">Zakat yang dikeluarkan atas kepemilikan harta apa saja selain emas dan perak, yang dipersiapkan untuk diperdagangkan dengan tujuan mencari keuntungan baik dilakukan oleh perseorangan maupun perserikatan</p>
                        <label class="lbl-kal">Nisab Zakat</label>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-dalam-zakat">Harga Beras Saat Ini</h6>
                                <p class="num-dalam-zakat">Rp. 10.000,-</p>
                                    <br>
                                <h6 class="text-dalam-zakat">NISHAB Beras (520 kg)</h6>
                                <p class="num-dalam-zakat">Rp. 5.200.000,-</p>
                                    <br>
                                <p class="text-bawah-paragraf">*Sumber Beras : BPS Pusat</p>
                                <p class="text-bawah-paragraf">*Sumber Beras : Gold Price</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-dalam-zakat">Harga Emas Saat Ini</h6>
                                <p class="num-dalam-zakat">Rp. 601.111,-</p>
                                    <br>
                                <h6 class="text-dalam-zakat">NISHAB Beras (520 kg)</h6>
                                <p class="num-dalam-zakat">Rp. 5.200.000,-</p>
                            </div>
                        </div>
                        <p class="parg-bawah">Anda dapat menghitung nilai zakat di kalkulator zakat atau langsung <br> zakat sekarang</p>
                        <form action="/bayar_zakat_dagang">
                            <button type="submit" class="btn btn-zakat .d-md-none .d-lg-block">ZAKAT SEKARANG</button>
                        </form>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="col-zakat-kiri">
                        <h6 class="text-kalkulator">Kalkulator Zakat Penghasilan</h6>
                        <div class="kalkulator-zakat">
                            <div class="form-group">
                                    <label class="lbl-kal" for="exampleInputEmail1">Modal (1 Tahun)</label>
                                    <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Keuntungan (1 Tahun)</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Piutang dagang</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Kerugian (1 Tahun)</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Hutang Jatuh Tempo</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                        </div>
                        <h6 class="text-kiri-kalkulator">Zakat Yang Dikeluarkan </h6>
                        <p class="num-kiri-zakat">Rp. 0</p>
                        <form action="/bayar_zakat_dagang">
                            <button type="button" class="btn btn-zakat d-md-block d-lg-none">ZAKAT SEKARANG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-emas-dan-perak" role="tabpanel" aria-labelledby="nav-emas-dan-zakat-tab">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-zakat-kanan">
                    <div class="col-kanan-zakat">
                        <h4>Zakat Emas dan Perak</h4>
                        <p class="text-zakat">Zakat wajib yang dikeluarkan dari emas perhiasan yang dimiliki oleh seorang muslim setiap satu tahun sekali jika telah mencapai nishabnya.</p>
                        <label class="lbl-kal">Nisab Zakat</label>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-dalam-zakat">Harga Beras Saat Ini</h6>
                                <p class="num-dalam-zakat">Rp. 10.000,-</p>
                                    <br>
                                <h6 class="text-dalam-zakat">NISHAB Beras (520 kg)</h6>
                                <p class="num-dalam-zakat">Rp. 5.200.000,-</p>
                                    <br>
                                <p class="text-bawah-paragraf">*Sumber Beras : BPS Pusat</p>
                                <p class="text-bawah-paragraf">*Sumber Beras : Gold Price</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-dalam-zakat">Harga Emas Saat Ini</h6>
                                <p class="num-dalam-zakat">Rp. 601.111,-</p>
                                    <br>
                                <h6 class="text-dalam-zakat">NISHAB Beras (520 kg)</h6>
                                <p class="num-dalam-zakat">Rp. 5.200.000,-</p>
                            </div>
                        </div>
                        <p class="parg-bawah">Anda dapat menghitung nilai zakat di kalkulator zakat atau langsung <br> zakat sekarang</p>
                        <form action="/bayar_zakat_emas">
                            <button type="submit" class="btn btn-zakat d-md-none d-lg-block">ZAKAT SEKARANG</button>
                        </form>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="col-zakat-kiri">
                        <h6 class="text-kalkulator">Kalkulator Zakat Emas dan Perak</h6>
                        <div class="kalkulator-zakat">
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Jumlah Emas (Per Gram)</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                        </div>
                        <h6 class="text-kiri-kalkulator">Zakat Yang Dikeluarkan </h6>
                        <p class="num-kiri-zakat">Rp. 0</p>
                        <form action="/bayar_zakat_emas">
                            <button type="submit" class="btn btn-zakat d-md-block d-lg-none">ZAKAT SEKARANG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-simpanan" role="tabpanel" aria-labelledby="nav-simpanan-tab">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-zakat-kanan">
                    <div class="col-kanan-zakat">
                        <h4>Zakat Simpanan</h4>
                        <p class="text-zakat">Seluruh harta simpanan baik tabungan ataupun deposito merupakan sumber harta yang wajib dikeluarkan zakatnya setelah mencapai nishab dan berjalan satu tahun (haul)</p>
                        <label class="lbl-kal">Nisab Zakat</label>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-dalam-zakat">Harga Beras Saat Ini</h6>
                                <p class="num-dalam-zakat">Rp. 10.000,-</p>
                                    <br>
                                <h6 class="text-dalam-zakat">NISHAB Beras (520 kg)</h6>
                                <p class="num-dalam-zakat">Rp. 5.200.000,-</p>
                                    <br>
                                <p class="text-bawah-paragraf">*Sumber Beras : BPS Pusat</p>
                                <p class="text-bawah-paragraf">*Sumber Beras : Gold Price</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-dalam-zakat">Harga Emas Saat Ini</h6>
                                <p class="num-dalam-zakat">Rp. 601.111,-</p>
                                    <br>
                                <h6 class="text-dalam-zakat">NISHAB Beras (520 kg)</h6>
                                <p class="num-dalam-zakat">Rp. 5.200.000,-</p>
                            </div>
                        </div>
                        <p class="parg-bawah">Anda dapat menghitung nilai zakat di kalkulator zakat atau langsung <br> zakat sekarang</p>
                        <form action="/bayar_zakat_simpanan">
                            <button type="submit" class="btn btn-zakat d-md-none d-lg-block">ZAKAT SEKARANG</button>
                        </form>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="col-zakat-kiri">
                        <h6 class="text-kalkulator">Kalkulator Zakat Penghasilan</h6>
                        <div class="kalkulator-zakat">
                            <div class="form-group">
                                    <label class="lbl-kal" for="exampleInputEmail1">Saldo Tabungan</label>
                                    <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label class="lbl-kal" for="exampleInputEmail1">Bagi Hasil</label>
                                <input type="email" class="form-control form-control-zakat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
                            </div>
                        </div>
                        <h6 class="text-kiri-kalkulator">Zakat Yang Dikeluarkan </h6>
                        <p class="num-kiri-zakat">Rp. 0</p>
                        <form action="/bayar_zakat_simpanan">
                            <button type="submit" class="btn btn-zakat d-md-block d-lg-none">ZAKAT SEKARANG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Akhir Nav Tabs -->

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