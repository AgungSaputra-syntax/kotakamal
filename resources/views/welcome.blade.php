@extends('layouts.app')
@section('title', 'Kotakamal')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}"></a>
            @else
                <a href="{{ route('login') }}"></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"></a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <!-- Slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/landing1bg.png" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/landing2bg.png" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/landing3bg.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Akhir Slider -->

    <!-- Border Atas Index -->
    <div class="border-atas-index">
        <div class="container">
            <div class="border-index">
                <div class="border-dalam-index">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-md-index">
                            <div class="logo-dalam-kiri">
                                <img class="img-border" src="img/indonesian-rupiah.png" alt="">
                                <div class="text-dalam-kiri">
                                    <div class="text-isi-kiri">TOTAL SELURUH PROGRAM SEDEKAH</div>
                                    <div class="num-isi-kiri">Rp 128.721.982</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="logo-dalam-kanan">
                                <img class="img-border" src="img/user1.png" alt="">
                                <div class="text-dalam-kanan">
                                    <div class="text-isi-kanan">DONATUR</div>
                                    <div class="num-isi-kanan">34.239</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Border Atas Index -->

    <!-- Index Card Kotak Amal -->
    <div class="container">
        <div class="border-index-card">
            <div class="program-kotakamal">
                <div class="judul-kotakamal text-center">
                    <img src="img/logofixsamping.png" alt="">
                    <p>Kotakamal adalah lembaga pengelolaan sedekah dan zakat </p>
                </div>
            </div>
            <div class="row">
                <div class="border-card"></div>
                <div class="col-lg-6 col-md-12 text-center">
                    <div class="card card-kotakamal">
                        <a href="sedekah.html">
                            <div class="card-body card-body-kotakamal">
                                <img src="img/logosedekah.png" alt="">
                                <h5 class="card-title card-title-kotakamal">Sedekah</h5>
                                <p class="card-text card-text-kotakamal">Program Sedekah meliputi Program Pembibitan Penghafal Al-Quran</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-center">
                    <div class="card card-kotakamal">
                        <a href="zakat.html">
                            <div class="card-body card-body-kotakamal">
                                <img src="img/logouangweb.png" alt="">
                                <h5 class="card-title card-title-kotakamal">Zakat</h5>
                                <p class="card-text card-text-kotakamal">Sucikan Harta, Bersihkan Jiwa, Tumbuhkan Kasih Sayang terhadap Sesama</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Index Card Kotak Amal -->

    <!-- Program Donasi -->
    <div class="program-donasi">
        <div class="container container-program-donasi">
            <div class="row text-center">
                <div class="col">
                    <span class="donasi">PROGRAM DONASI</span>
                </div>
            </div>
            <div class="row">
                <div class="card-deck card-deck-donasi">
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-donasi">
                            <img class="card-img-top card-img-top-donasi" src="img/Mask Group 16.png" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title card-title-donasi">Wakaf Bangun Pesantren Tahfidz Putra di Kalteng</h5>
                            <p class="card-text"><small class="text-muted text-muted-atas-donasi">Oleh : Daarul Qur'an (Admin)</small></p>
                            <p class="card-text card-text-donasi">Hati kami menangis ketika melihat pesantren putra belum terbangun, atapnya bolong-bolong dan dinding kayunya juga bolong.</p>
                            <div class="progress progress-bawah">
                                <div class="progress-bar progress-atas" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">38%</div>
                            </div>
                            <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                            <div class="number-bawah">
                                <p class="number">Rp. 13.654.124</p>
                                <div class="number-logo">
                                    <img src="img/user.png" class="number-kiri">
                                    <span class="number-dua">13 hari lagi</span>
                                </div>
                            </div>
                            <button type="button" class="btn button-donasi">Sedekah Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-donasi">
                            <img class="card-img-top card-img-top-donasi" src="img/Mask Group 17.png" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title card-title-donasi">Lampung Sambut Wisuda Akbar Rumah Tahfidz</h5>
                            <p class="card-text"><small class="text-muted text-muted-atas-donasi">Oleh : Daarul Qur'an (Admin)</small></p>
                            <p class="card-text card-text-donasi">Menghafal adalah jalan menuju surga-Nya, jalan menuju kebahagiaan yang sesungguhnya dan jalan untuk mencari ridho Allah SWT.</p>
                            <div class="progress progress-bawah">
                                <div class="progress-bar progress-atas" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">52%</div>
                            </div>
                            <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                            <div class="number-bawah">
                                <p class="number">Rp. 13.654.124</p>
                                <div class="number-logo">
                                    <img src="img/user.png" class="number-kiri">
                                    <span class="number-dua">13 hari lagi</span>
                                </div>
                            </div>
                            <button type="button" class="btn button-donasi">Sedekah Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-donasi">
                            <img class="card-img-top card-img-top-donasi" src="img/Mask Group 18.png" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title card-title-donasi">Kaltara Gelar Wisuda Akbar Rumah Tahfidz</h5>
                            <p class="card-text"><small class="text-muted text-muted-atas-donasi">Oleh : Daarul Qur'an (Admin)</small></p>
                            <p class="card-text card-text-donasi">Rangkaian acara ini meliputi ujian tahfidz, lomba mewarnai, seminar parenting, lomba menghafal juz 30 dan sebagai puncak acara dalah tabligh akbar.</p>
                            <div class="progress progress-bawah">
                                <div class="progress-bar progress-atas" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">83%</div>
                            </div>
                            <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                            <div class="number-bawah">
                                <p class="number">Rp. 13.654.124</p>
                                <div class="number-logo">
                                    <img src="img/jam.png" class="number-kiri">
                                    <span class="number-dua">13 hari lagi</span>
                                </div>
                            </div>
                            <button type="button" class="btn button-donasi">Sedekah Sekarang</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <form action="program.html">
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-danger btn-all-donasi text-center">Lihat Semua</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Akhir Program Donasi -->


    <!-- Artikel -->
    <div class="container">
    <div class="wrapper">
        <h2 class="judul-slick-index">ARTIKEL<h2>
        <div class="slick-index">
            <div>
                <div class="card" style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/sekh-pp.png" alt="">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body card-body-wrapper">
                                <h5 class="card-title card-title-wrapper">Inspirasi Itu Bernama Sekhumi</h5>
                                <h6 class="card-subtitle mb-2 text-muted text-muted-wrapper">Bogor, Jawa Barat</h6>
                                <p class="card-text card-text-wrapper">Perempuan itu bernama Sekhumi (50). Ia adalah seorang pengemudi ojek online yang harus menjadi tulang punggung keluarga.</p>
                                <button type="button" class="btn btn-wrapper">SELENGKAPNYA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/ngaji.png" alt="">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body card-body-wrapper">
                                <h5 class="card-title card-title-wrapper">Allah Panggil Dwi Pulang</h5>
                                <h6 class="card-subtitle mb-2 text-muted text-muted-wrapper">Depok, Jawa Barat</h6>
                                <p class="card-text card-text-wrapper">Perempuan itu tak lagi kepayahan. Tak ada lagi rintihan kesakitan saat tulang-tulangnya yang remuk tersentuh atau digerakkan.</p>
                                <button type="button" class="btn btn-wrapper">SELENGKAPNYA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/dwi.png" alt="">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body card-body-wrapper">
                                <h5 class="card-title card-title-wrapper">Demi Ujian Tahfidz, Puluhan Kilometer ditempuh Baroki </h5>
                                <h6 class="card-subtitle mb-2 text-muted text-muted-wrapper">Bogor, Jawa Barat</h6>
                                <p class="card-text card-text-wrapper">Jarak antara Sukasari dengan Gunung Putri tidaklah dekat, tetapi hal tersebut sama sekali tidak mematahkan semangat baroki.</p>
                                <button type="button" class="btn btn-wrapper">SELENGKAPNYA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="artikel.html">
        <div class="text-center">
            <button type="submit" class="btn btn-outline-danger btn-all-artikel">Lihat Semua</button>
        </div>
    </form>
    </div>
    <!-- Akhir Artikel -->


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
    </div>
</div>
@endsection
