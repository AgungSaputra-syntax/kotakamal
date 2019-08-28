@extends('layouts.app')
@section('title', 'Detail Program')
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

<!-- Bawah Image -->
<div class="container">
    <div class="artikel-update">
        <div class="row">
            <div class="col-8">
                <p class="text-artikel-update">Sejak berdirinya Panti Asuhan Rumah Sejahtera pada 2014 lalu, tempat ini menjadi rumah anak-anak yatim di Komplek Masjid Al-Huda Kuwon, Tembesi, Ponjong, Gunungkidul. Hingga sekarang, Rumah Sejahtera tersebut telah mengasuh 58 santri mukim dan 102 santri non-mukim.</p>
            </div>
            <div class="col-4">
                <div class="btn-update">
                    <div class="btn-atas-update text-center">
                        <a href="/bayar_donasi">
                            <span>DONASI SEKARANG</span>
                        </a>
                    </div>
                    <div class="btn-bawah-update text-center">
                        <img class="btn-sosmed" src="img/facebook.png" alt="">
                        <span>DIBAGIKAN 12.789 KALI</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Bawah Image -->
</div>

<!-- Nav Tabs -->
<!-- <div class="bg-donasi"> -->
<div class="bg-nav-tabs">
    <div class="container">
        <nav>
            <div class="row nav nav-tabs nav-tabs-update" id="nav-tab" role="tablist">
                <a class="col-md-4 nav-item nav-item-update nav-link nav-link-update active" id="nav-detail-tab" data-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="true">Detail</a>
                <a class="col-md-4 nav-item nav-item-update nav-link nav-link-update" id="nav-update-tab" data-toggle="tab" href="#nav-update" role="tab" aria-controls="nav-update" aria-selected="false" name="nav-update-tab">Update</a>
            </div>
        </nav>
        <div class="row">
            <div class="col-lg-8  col-md-12 tab-content tab-content-update" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                    <div class="border-atas-kanan-update text-center">
                        <span class="update">Baca update terbaru dari penggalangan dana ini!</span>
                        <a href="" class="btn btn-lihat-update" role="button" type="submit" data-target="nav-update-tab" target="nav-update">LIHAT UPDATE</a>
                    </div>
                    <div class="card card-bawah-update">
                        <div class="card-body card-body-bawah-update">
                            <h5 class="card-title card-title-bawah-update">Sahabat kemanusiaan, tahukah ada orang-orang sakit yang harus menempuh jarak ratusan kilometer untuk berobat? </h5>
                            <p class="card-text card-text-bawah-update">Pengalaman tersebut harus dirasakan Raffa balita dari Balangan yang menderita kanker darah (leukemia). Karena penyakit itu, bocah berusia 2 tahun ini musti berobat ke rumah sakit di Banjarmasin yang menjadi satu-satunya tempat rujukan.</p>
                            <p class="card-text card-text-bawah-update">Berkat keistiqomahannya, sejak 2014 lalu pesantren ini sudah menampung 120 santri dengan 50 santri mukim dan 70 santri nonmukim. Diantara mereka terdapat tujuh santri yatim. Pembangunan ini sangat dibutuhkan mengingat jumlah santri putra terus bertambah hingga mencapai 50 santri dengan 20 santri mukim dan 30 santri nonmukim. Setiap bulannya, para santri sudah terbiasa menghafal 1 juz dan beberapa diantara mereka sudah memiliki hafalan 12 juz.</p>
                            <p class="card-text card-text-bawah-update">“Hati kami menangis ketika melihat pesantren putra belum terbangun, atapnya bolong-bolong dan dinding kayunya juga bolong,” kata Koordinator Daerah Rumah Tahfizh Kalteng Ustadz Muaripin. Jika pesantren ini sudah terbangun para santri mengaku bisa lebih mandiri, lebih nyaman berada di tempat yang layak pakai, dan dapat lebih berkonsentransi dalam menghafalkan al-Qur’an.</p>
                            <p class="card-text card-text-bawah-update">Kini lahan seluas 20 x 40 meter persegi dari tanah wakaf dan hasil lelang tengah dipersiapkan sebagai pesantren putra. Insya Allah, pembangunan akan dimulai pada akhir Februari 2019 mendatang. Mari turut serta membantu pembangunan Pesantren Tahfizh Putra di Kalteng. Semoga dengan pembangunan pesantren ini dapat memasifkan tercetaknya generasi penghafal al-Qur’an, Aamiin.</p>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">
                    <div id="accordion">
                        <div class="card card-update">
                            <div class="card-header card-header-update" id="heading-1">
                                <h5 class="mb-1">
                                    <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1"
                                    class="link-judul-update">
                                    <span> UPDATE 3 </span> <br><br>
                                    13 Februari 2019
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
                                <div class="card-body">
                                    <p>Why I am supporting Safelight's cause... It took me a long time to admit outloud that I had been in an abusive relationship for roughly the last year an d half of my college career. I studied domestic violence/interpersonal partner violence during that time, but continued to do what many people trapped in those relationships do... </p>
                                        <br>
                                    <p> I"is it worth it?", "do you really think that's what love is?", and yes, even when said "you study this stuff, you know what this is, why do you let yourself go through this?"</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-update">
                            <div class="card-header card-header-update" id="heading-2">
                            <h5 class="mb-1">
                                <a class="collapsed link-judul-update" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    <span> UPDATE 2 </span> <br><br>
                                    27 September 2018
                                </a>
                            </h5>
                            </div>
                            <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                <div class="card-body">
                                    <p>Why I am supporting Safelight's cause... It took me a long time to admit outloud that I had been in an abusive relationship for roughly the last year an d half of my college career. I studied domestic violence/interpersonal partner violence during that time, but continued to do what many people trapped in those relationships do... </p>
                                        <br>
                                    <p> I"is it worth it?", "do you really think that's what love is?", and yes, even when said "you study this stuff, you know what this is, why do you let yourself go through this?"</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-update">
                            <div class="card-header card-header-update" id="heading-3">
                            <h5 class="mb-1">
                                <a class="collapsed link-judul-update" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    <span> UPDATE 1 </span> <br><br>
                                    23 Januari 2018
                                </a>
                            </h5>
                            </div>
                            <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
                            <div class="card-body">
                                <p>Why I am supporting Safelight's cause... It took me a long time to admit outloud that I had been in an abusive relationship for roughly the last year an d half of my college career. I studied domestic violence/interpersonal partner violence during that time, but continued to do what many people trapped in those relationships do... </p>
                                    <br>
                                <p> I"is it worth it?", "do you really think that's what love is?", and yes, even when said "you study this stuff, you know what this is, why do you let yourself go through this?"</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4 class="judul-card-update-1">DONATUR</h4>
                <div class="garis-judul-card-update-1"></div>
                <div class="card card-update-1">
                    <div class="card-body card-body-update-1">
                        <div class="avatar-update">
                            <img class="img-avatar-update" src="img/1.jpg" alt="">
                            <div class="avatar-update-1">
                                <span class="nama-avatar-update-1">Agung Saputra</span>
                                <p class="num-avatar-update-1">Rp 200.000</p>
                            </div>
                        </div>
                        <div class="text-update">
                            <P>Ya Allah ampunilah semua dosa2 kami, kabulkanlah hajat2 semua hamba-Mu, mudahkanlah dan tolong kami di setiap urusan yang kami kerjakan, serta rahmatilah kami dengan kasih sayang Mu. Ya Allah.. kabulkan juga 3 hajat ku tahun 2019 ini. Ijinkan aku menikahi wanita yang aku cintai, berikan aku kekayaan harta yg berlimpah, berkah dan halal untuk ku belanjakan di jalan-Mu, dan berikan rumah impian ku.. Aaminn</P>
                        </div>
                    </div>
                </div>
                <div class="card card-update-2">
                    <div class="card-body card-body-update-1">
                        <div class="avatar-update">
                            <img class="img-avatar-update" src="img/1.jpg" alt="">
                            <div class="avatar-update-1">
                                <span class="nama-avatar-update-1">Agung Saputra</span>
                                <p class="num-avatar-update-1">Rp 250.000</p>
                            </div>
                        </div>
                        <div class="text-update">
                            <P>Semoga Bermanfaat</P>
                        </div>
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