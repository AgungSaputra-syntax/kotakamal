@extends('layouts.app')
@section('title', 'Detail Artikel')
@section('content')
<!-- Background Artikel -->
<div class="bg-artikel">
    <div class="container container-artikel">
        <div class="search-artikel-img">
            <div class="dropdown show dropdown-show-program">
                <a class="btn btn-secondary dropdown-toggle btn-artikel" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategori
                </a>
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Semua Kategori</a>
                    <a class="dropdown-item" href="#">Kesehatan</a>
                    <a class="dropdown-item" href="#">Kemanusiaan</a>
                    <a class="dropdown-item" href="#">Pembangunan</a>
                    <a class="dropdown-item" href="#">Pendidikan</a>
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-search-artikel">Cari</button>
        </div>
    </div>
</div>
<!-- Akhir Background Artikel -->

<!-- Bg Isi Artikel -->
<div class="bg-isi-artikel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card-kiri-artikel">
                            <div class="card card-kiri-detail-artikel">
                                <div class="card-body">
                                    <h5 class="card-title card-title-detail-artikel">Demi Ujian Tahfizh, Puluhan Kilometer Ditempuh Baroki</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-muted-detail-artikel">Tanggal Terbit : 11 Febuari 2010</h6>
        
                                    <p class="card-text card-text-detail-artikel">Wisuda Akbar Rumah Tahfizh ke-9 memasuki hitungan hari. Segala persiapan dilakukan oleh semua elemen yang terlibat dalam kegiatan ini. Tak hanya para pengajar dan pengelola Rumah Tahfizh yang sibuk menyambut kegiatan ini, namun juga para santri. Salah satu santri yang bersemangat menyambut kegiatan ini adalah Baroki. Santri asal Rumah Tahfizh Aghitsna yang terletak di Kabupaten Kendal ini menempuh perjalanan selama dua jam setengah untuk mencapai lokasi ujian yang dilaksanakan di Masjid Jami Jatisari Mijen, Semarang. Ia dan teman-teman harus berganti angkutan umum sampai tiga kali untuk bisa sampai di lokasi.</p>
        
                                    <img class="img-detail-artikel" src="img/ngaji.png" alt="">
        
                                    <p class="card-text card-text-detail-artikel">“Saya berangkat ke Semarang sebelum subuh dan berganti-ganti angkot untuk bisa sampai masjid ini, Ustadz,” kata Baroki ketika ditanya penguji di lokasi ujian, pada Ahad (10/2/2019) pagi. 
                                        <br><br>
                                    Baroki juga berharap, perjuangannya menempuh perjalanan untuk hadir di ujian ini dapat membuahkan hasil yang baik.
                                        <br><br>
                                    “Semoga bisa ikut diwisuda,” katanya bersemangat.
                                        <br><br>    
                                    Untuk diketahui, Rumah Tahfizh Center (RTC) akan menggelar Wisuda Akbar Rumah Tahfizh ke-9. Kegiatan yang dilaksanakan serentak di 16 Rumah Tahfizh yang tersebar di seluruh Indonesia ini akan dihelat pada Ahad, 24 Februari 2019. Hingga saat ini sudah ribuan santri yang mendaftar untuk mengikuti kegiatan ini.  [PPPA/mnx]</p>
                                        <br><br>
                                    <p class="card-text card-text-bawah-detail-artikel">Salurkan kepedulian sobat melalui Rekening :
                                        <br><br>
                                    BCA 0491616171 <br>
                                    CIMB Niaga Syariah 860003843600 an <br>  Yayasan Kotakamal
                                        <br><br>     
                                    Konfirmasi wa.me/6281237671819</p>
                                        <div class="garis-konfirmasi-detailArtikel">
                                            <hr>
                                        </div>
                                    <div class="share-detail-artikel text-center">
                                        <p>Bagikan Artikel Ini untuk orang-orang terdekat anda melalui :</p>
                                    </div>
                                    <div class="sosmed-detail-artikel">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 text-center">
                                                <button class="fb-sosmed-detail-artikel">
                                                    <img src="img/fb.png" alt="">
                                                </button>
                                            </div>
                                            <div class="col-md-12 col-lg-6 text-center">
                                                <button class="wa-sosmed-detail-artikel">
                                                    <img src="img/wa.png" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="komentar-detail-artikel">
                                        <p>0 Comments</p>
                                    </div>
                                    <div class="isi-komentar-detail-artikel">
                                        <div class="row no-gutters">
                                            <div class="col-md-2 text-center">
                                                <img class="img-user-detail-artikel" src="img/Mask Group 1.png" alt="">
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add a comment..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row no-gutters">
                                            <div class="col-md-1 text-center">
                                                <img src="img/fb11.png" alt="">
                                            </div>
                                            <div class="col-md-11 mt-1">
                                                <p class="fb-komen">Facebook comments Plugins</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="judul-artikel-kanan">PALING POPULER</h1>
                        <div class="border-artikel-populer">
                            <div class="isi-artikel-populer">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="img/yakin.png" alt="">
                                    </div>
                                    <div class="col-9">
                                        <div class="col-kanan-isi-artikel">
                                            <h6 class="judul-isi-artikel">Yakin</h6>
                                            <p class="small-isi-artikel">Terbit Tanggal : 18 Januari 2019</p>
                                            <p class="text-isi-artikel">Yakin membuat seseorang lebih percaya diri dalam menghadapi ujian hidup yang dijalani</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="isi-artikel-populer">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="img/terakhir.png" alt="">
                                    </div>
                                    <div class="col-9">
                                        <div class="col-kanan-isi-artikel">
                                            <h6 class="judul-isi-artikel">Penjengukan Terakhir</h6>
                                            <p class="small-isi-artikel">Terbit Tanggal : 21 Januari 2019</p>
                                            <p class="text-isi-artikel">Saat pertama kali dijenguk oleh tim redaksi, kami menemukan seseorang yang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="isi-artikel-populer">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="img/rezeki.png" alt="">
                                    </div>
                                    <div class="col-9">
                                        <div class="col-kanan-isi-artikel">
                                            <h6 class="judul-isi-artikel">Rumus Nyari Rezeki</h6>
                                            <p class="small-isi-artikel">Terbit Tanggal : 21 Februari 2019</p>
                                            <p class="text-isi-artikel">Jarak antara Sukasari dengan Gunung Putri tidaklah dekat, tetapi hal tersebut sama sekali tidak mematahkan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <h1 class="judul-artikel-kanan">ARTIKEL TERBARU</h1>
                        <div class="border-artikel-terbaru">
                            <div class="isi-artikel-terbaru">
                                <h5 class="judul-artikel-terbaru">300 Al-Quran Untuk Warga Lombok</h5>
                                <p class="text-artikel-terbaru">Terbit Tanggal : 18 Januari 2019</p>
                            </div>
                            <div class="isi-artikel-terbaru">
                                <h5 class="judul-artikel-terbaru">Demi Ujian Tahfizh, Puluhan Kilometer Ditempuh Baroki </h5>
                                <p class="text-artikel-terbaru">Terbit Tanggal : 18 Januari 2019</p>
                            </div>
                            <div class="isi-artikel-terbaru">
                                <h5 class="judul-artikel-terbaru">Rumah Baru Bagi Santri Penyandang Disabilitas </h5>
                                <p class="text-artikel-terbaru">Terbit Tanggal : 18 Januari 2019</p>
                            </div>
                            <div class="isi-artikel-terbaru">
                                <h5 class="judul-artikel-terbaru">Inspirasi Itu Bernama Sekhumi</h5>
                                <p class="text-artikel-terbaru">Terbit Tanggal : 18 Januari 2019</p>
                            </div>
                            <div class="isi-artikel-terbaru">
                                <h5 class="judul-artikel-terbaru">300 Al-Quran Untuk Warga Lombok</h5>
                                <p class="text-artikel-terbaru">Terbit Tanggal : 18 Januari 2019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Bg Isi Artikel -->


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