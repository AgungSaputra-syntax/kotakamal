@extends('layouts.app')
@section('title', 'Kotakamal')
@section('content')
<!-- Background Program -->
<div class="bg-program">
    <div class="container container-program">
        <div class="search-program-img">
            <div class="dropdown show dropdown-show-program">
                <a class="btn btn-secondary dropdown-toggle btn-program" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <button type="button" class="btn btn-danger btn-search-program">Cari</button>
        </div>
    </div>
</div>
<!-- Akhir Background Program -->

<!-- Card Program -->
<div class="border-program">
    <div class="container">
        <div class="card-deck card-deck-program">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card card-program">
                        <img class="card-img-top card-img-top-program" src="img/bangun-pesantren.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title card-title-program">Wakaf Bangun Pesantren Tahfidz Putra di Kalteng</h5>
                        <p class="card-text"><small class="text-muted text-muted-atas-program">Oleh : Daarul Qur'an (Admin)</small></p>
                        <p class="card-text card-text-program">Hati kami menangis ketika melihat pesantren putra belum terbangun, atapnya bolong-bolong dan dinding kayunya juga bolong.</p>
                        <div class="progress progress-bawah">
                            <div class="progress-bar progress-atas" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">38%</div>
                        </div>
                        <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                        <div class="number-bawah-program">
                            <p class="number-program">Rp. 13.654.124</p>
                            <div class="number-logo-program">
                                <img src="img/user.png" class="number-kiri">
                                <span class="number-dua">13 hari lagi</span>
                            </div>
                        </div>
                            <form action="/detail_program">
                                <button type="submit" class="btn button-program">Sedekah Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-program">
                        <img class="card-img-top card-img-top-program" src="img/lampung.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title card-title-program">Lampung Sambut Wisuda Akbar Rumah Tahfidz</h5>
                        <p class="card-text"><small class="text-muted text-muted-atas-program">Oleh : Daarul Qur'an (Admin)</small></p>
                        <p class="card-text card-text-program">Menghafal adalah jalan menuju surga-Nya, jalan menuju kebahagiaan yang sesungguhnya dan jalan untuk mencari ridho Allah SWT.</p>
                        <div class="progress progress-bawah">
                            <div class="progress-bar progress-atas" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">52%</div>
                        </div>
                        <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                        <div class="number-bawah-program">
                            <p class="number-program">Rp. 13.654.124</p>
                            <div class="number-logo-program">
                                <img src="img/user.png" class="number-kiri">
                                <span class="number-dua">13 hari lagi</span>
                            </div>
                        </div>
                        <button type="button" class="btn button-donasi">Sedekah Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card card-program">
                        <img class="card-img-top card-img-top-program" src="img/kaltara.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title card-title-program">Kaltara Gelar Wisuda Akbar Rumah Tahfidz</h5>
                        <p class="card-text"><small class="text-muted text-muted-atas-program">Oleh : Daarul Qur'an (Admin)</small></p>
                        <p class="card-text card-text-program">Rangkaian acara ini meliputi ujian tahfidz, lomba mewarnai, seminar parenting, lomba menghafal juz 30 dan sebagai puncak acara dalah tabligh akbar.</p>
                        <div class="progress progress-bawah-program">
                                <div class="progress-bar progress-atas-program" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">83%</div>
                        </div>
                        <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                        <div class="number-bawah-program">
                            <p class="number-program">Rp. 13.654.124</p>
                            <div class="number-logo-program">
                                <img src="img/clock.png" class="number-kiri">
                                <span class="number-dua">13 hari lagi</span>
                            </div>
                        </div>
                        <button type="button" class="btn button-program">Sedekah Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck card-deck-program1">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="card card-program">
                        <img class="card-img-top card-img-top-program" src="img/Mask Group 16.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title card-title-program">Wakaf Bangun Pesantren Tahfidz Putra di Kalteng</h5>
                        <p class="card-text"><small class="text-muted text-muted-atas-program">Oleh : Daarul Qur'an (Admin)</small></p>
                        <p class="card-text card-text-program">Hati kami menangis ketika melihat pesantren putra belum terbangun, atapnya bolong-bolong dan dinding kayunya juga bolong.</p>
                        <div class="progress progress-bawah-program">
                            <div class="progress-bar progress-atas-program" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">38%</div>
                        </div>
                        <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                        <div class="number-bawah-program">
                            <p class="number-program">Rp. 13.654.124</p>
                            <div class="number-logo-program">
                                <img src="img/user.png" class="number-kiri">
                                <span class="number-dua">13 hari lagi</span>
                            </div>
                        </div>
                        <button type="button" class="btn button-program">Sedekah Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card card-program">
                        <img class="card-img-top card-img-top-program" src="img/wisuda.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title card-title-program">Lampung Sambut Wisuda Akbar Rumah Tahfidz</h5>
                        <p class="card-text"><small class="text-muted text-muted-atas-program">Oleh : Daarul Qur'an (Admin)</small></p>
                        <p class="card-text card-text-program">Menghafal adalah jalan menuju surga-Nya, jalan menuju kebahagiaan yang sesungguhnya dan jalan untuk mencari ridho Allah SWT.</p>
                        <div class="progress progress-bawah-program">
                            <div class="progress-bar progress-atas-program" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">52%</div>
                        </div>
                        <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                        <div class="number-bawah-program">
                            <p class="number-program">Rp. 13.654.124</p>
                            <div class="number-logo-program">
                                <img src="img/user.png" class="number-kiri">
                                <span class="number-dua">13 hari lagi</span>
                            </div>
                        </div>
                        <button type="button" class="btn button-program">Sedekah Sekarang</button>
                        </div>
                    </div>
                </div> 
                <div class="col-md-12 col-lg-4">
                    <div class="card card-program">
                        <img class="card-img-top card-img-top-program" src="img/sukabumi.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title card-title-program">Kaltara Gelar Wisuda Akbar Rumah Tahfidz</h5>
                        <p class="card-text"><small class="text-muted text-muted-atas-program">Oleh : Daarul Qur'an (Admin)</small></p>
                        <p class="card-text card-text-program">Rangkaian acara ini meliputi ujian tahfidz, lomba mewarnai, seminar parenting, lomba menghafal juz 30 dan sebagai puncak acara dalah tabligh akbar.</p>
                        <div class="progress progress-bawah-program">
                                <div class="progress-bar progress-atas-program" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">83%</div>
                        </div>
                        <p class="card-text"><small class="text-muted">Terkumpul</small></p>
                        <div class="number-bawah-program">
                            <p class="number-program">Rp. 13.654.124</p>
                            <div class="number-logo-program">
                                <img src="img/clock.png" class="number-kiri">
                                <span class="number-dua">13 hari lagi</span>
                            </div>
                        </div>
                        <button type="button" class="btn button-program">Sedekah Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="">
                <button type="button" class="btn btn-outline-danger btn-all-program text-center">Lihat Semua</button>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Card Program -->

<!-- Border Bawah Index -->
<div class="border-bawah-program">
    <div class="row row-program">
        <div class="col-md-12 col-lg-3">
            <span>BERLANGGANAN BERITA DENGAN KOTAKAMAL</span>
        </div>
        <div class="col-md-9 col-lg-7">
            <input type="email" class="form-border-dalam-program" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email Anda Disini">
        </div>
        <div class="col-md-3 col-lg-2">
            <button type="button" class="btn btn-border-bawah-program">BERLANGGANAN</button>
        </div>
    </div>
    
</div>
<!-- Akhir Border Bawah Index -->
@endsection