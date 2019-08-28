@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')
<!-- Background img -->
<div class="bg-tentang-kami"></div>
<!-- Akhir Background img -->

<!-- Border Tentang Kami -->
<div class="bg-isi-tentang-kami">
    <div class="container">    
        <div class="border-tentang-kami">
            <p>Menghubungkan #AmalBaik</p>
        </div>
    </div>
    <div class="container">
        <div class="isi-tentang-kami">
            <p class="judul-isi-tentang-kami">Sejak tahun 2013, kami menyediakan wadah dan teknologi online bagi individu, komunitas, organisasi,<br> maupun perusahaan (kami sebut para #AmalBaik) yang ingin:</p>

            <p class="paragraf-tentang-kami"> 1. Menggalang dana dengan membuat halaman donasi online (kami sebut halaman penggalangan untuk <br> beragam tujuan sosial, personal, kreatif dan lainnya.</p>
                    
            <p class="paragraf-tentang-kami">2. Berdonasi kapan saja secara online ke penggalangan di Kotakamal sesuai dengan kategori atau organisasi <br> yang ia peduli.</p>
                    
            <p class="paragraf-tentang-kami">Dengan semangat gotong-royong menghubungkan kebaikan, Kotakamal menerapkan kebijakan open platform. <br> Artinya, dalam hitungan menit siapapun dapat membuat halaman donasi di Kitabisa selama mereka <br> melengkapi syarat verifikasi identitas dan tidak melanggar hukum di Indonesia. Pelajari lebih lanjut di Syarat & <br> Ketentuan dan Pusat Bantuan kami.</p>
        </div>
    </div>
    <div class="container">    
        <div class="border-tentang-kami">
            <p>Bagaimana Kotakamal membiayai operasional?</p>
        </div>
    </div>
    <div class="container">
        <div class="isi-tentang-kami">
            <p class="judul-isi-tentang-kami">Sebagai social enterprise startup, Kotakamal mengenakan biaya administrasi sebesar 5% dari total donasi <br> di sebuah penggalangan, kecuali penggalangan bencana alam dan zakat (0% biaya administrasi). <br> Dengan model ini, kami bisa fokus mengembangkan teknologi dan layanan untuk terus mempermudah kegiatan <br> menggalang dana dan donasi di Indonesia dan dunia.</p>

            <p class="paragraf-tentang-kami">Lebih lengkapnya silakan cek halaman <span> Biaya Adminstrasi.</span></p>
        </div>
    </div>
    <div class="container">    
        <div class="border-tentang-kami">
            <p>Apakah Kotakamal legal dan berizin?</p>
        </div>
    </div>
    <div class="container">
        <div class="isi-tentang-kami">
            <p class="judul-isi-tentang-kami">Yayasan Kotakamal tercatat di Kemenkumham, mendapatkan izin PUB (Penggalangan Uang dan Barang) dari <br> Kemensos dengan SK Menteri no 478/HUK-PS/2017, dan diaudit oleh Kantor Akuntan Publik dengan hasil <br> Wajar Tanpa Pengecualian. Lihat opini audit Kotakamal di <span> link berikut.</span></p>
        </div>
    </div>
    <!-- AKhir Border Tentang Kami -->
</div>

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