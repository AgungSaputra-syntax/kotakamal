@extends('layouts.app')
@section('title', 'Kotakamal')
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
                        <div class="media media-artikel">
                            <img class="mr-3" src="img/sekh-pp.png" alt="Generic placeholder image">
                            <div class="media-body media-body-artikel">
                                <h5 class="card-body-judul-text">Inspirasi Itu Bernama Sekhumi</h5>
                                <p class="card-body-small-text">Bogor, Jawa Barat</p>
                                <p class="card-body-paragraf-text">Perempuan itu bernama Sekhumi (50). Ia adalah seorang pengemudi ojek online yang harus menjadi tulang punggung keluarga.</p>
                                <form action="detail artikel.html">
                                    <button type="submit" class="btn btn-isi-artikel">SELENGKAPNYA</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="media media-artikel">
                            <img class="mr-3" src="img/dwi.png" alt="Generic placeholder image">
                            <div class="media-body media-body-artikel">
                                <h5 class="card-body-judul-text">Allah Panggil Dwi Pulang</h5>
                                <p class="card-body-small-text">Depok, Jawa Barats</p>
                                <p class="card-body-paragraf-text">Perempuan itu tak lagi kepayahan. Tak ada lagi rintihan kesakitan saat tulang-tulangnya yang remuk tersentuh atau digerakkan.</p>
                                <form action="detail artikel.html">
                                    <button type="submit" class="btn btn-isi-artikel">SELENGKAPNYA</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="media media-artikel">
                            <img class="mr-3" src="img/ngaji.png" alt="Generic placeholder image">
                            <div class="media-body media-body-artikel">
                                <h5 class="card-body-judul-text">Demi Ujian Tahfidz, Puluhan Kilometer ditempuh Baroki </h5>
                                <p class="card-body-small-text">Bogor, Jawa Barat</p>
                                <p class="card-body-paragraf-text">Jarak antara Sukasari dengan Gunung Putri tidaklah dekat, tetapi hal tersebut sama sekali tidak mematahkan semangat baroki.</p>
                                <form action="/detail_artikel">
                                    <button type="submit" class="btn btn-isi-artikel">SELENGKAPNYA</button>
                                </form>
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