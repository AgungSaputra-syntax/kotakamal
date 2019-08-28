@extends('layouts.app')
@section('title', 'Syarat dan Ketentuan')
@section('content')
<!-- Background img -->
<div class="bg-sk"></div>
<!-- Akhir Background img -->

<!-- Paragraf SK -->
<div class="bg-isi-sk">
    <div class="container">
        <p class="isi-sk">Syarat dan ketentuan dalam halaman ini mengikat para Pengunjung dan Pengguna Situs Daarul Qur'an untuk tunduk dan patuh atas apa yang telah ditetapkan oleh pihak pengelola situs. mengenai data privasi yang dijaga. Dengan mengunjungi atau menggunakan situs Daarul Qur'an, maka baik pengunjung maupun pengguna dinyatakan telah memahami dan menyepakati semua isi dalam syarat dan ketentuan di bawah ini:</p>
    </div>
    <!-- Akhir Paragraf SK -->

    <!-- Nav Tabs SK -->
    <div class="container">
        <nav>
            <div class="nav nav-tabs-sk nav-tabs-sk" id="nav-tab" role="tablist">
                <a class="col-md-6 text-center nav-item-sk nav-link-sk active" id="nav-donatur-tab" data-toggle="tab" href="#nav-donatur" role="tab" aria-controls="nav-donatur" aria-selected="true">Bagi Donatur</a>
                <a class="col-md-6 text-center nav-item-sk nav-link-sk" id="nav-umum-tab" data-toggle="tab" href="#nav-umum" role="tab" aria-controls="nav-umum" aria-selected="false">Umum</a>
            </div>
        </nav>
        <div class="tab-content tab-content-sk" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-donatur" role="tabpanel" aria-labelledby="nav-donatur-tab">
                <p class="judul-isi-sk">Pengguna Situs yang merupakan pendukung kampanye penggalangan dana baik dalam bentuk donasi, penyebaran informasi, dan berbagai bentuk dukungan lainnya berkewajiban untuk:</p>

                <p class="paragraf-sk">1. Wajib mencermati segala informasi mengenai ide dan/atau kampanye penggalangan dana yang dimuat di dalam Situs sebelum memberikan dukungan;</p>

                <p class="paragraf-sk">2. Tidak memberikan informasi tambahan yang palsu dan/atau menyesatkan atas segala halaman, tautan, dan berbagai bentuk media lainnya dari kampanye suatu penggalangan dana di sedekahonline.com;</p>        
                        
                <p class="paragraf-sk">3. Bertanggung jawab atas donasi yang telah disalurkan dan menyadari konsekuensi bahwa Pemilik Kampanye penggalangan dana berkemungkinan tidak dapat melaksanakan secara sebagian atau sepenuhnya atas kampanye dan/atau reward/imbalan yang telah dijanjikan sebelumnya pada kampanyenya;</p>        
                        
                <p class="paragraf-sk">4. Sepakat untuk tidak mempermasalahkan dan/atau menuntut secara hukum Pihak Pengelola Situs dan Pihak Pemilik Kampanye;</p>
                
                <p class="paragraf-sk">5. Calon donatur dapat memanfaatkan kontak narahubung yang tertera di tiap halaman kampanye untuk mengetahui detail suatu kampanye baik pada saat penggalangan dana maupun ketika masa implementasi kampanye dari narahubung secara langsung;</p>     

                <p class="paragraf-sk">6. Saat berdonasi secara anonim artinya nama & alamat email donatur tidak akan terlihat di halaman campaign namun tetap terpublikasi dengan sebutan "Hamba Allah" dan data dapat terlihat oleh manajemen sedekahonline.com;</p>     
                <p class="paragraf-sk">7. Wajib tidak melakukan pencucian uang dan/atau menggunakan uang yang berasal dari sumber yang tidak sah secara hukum dalam mendonasikan uangnya untuk mendukung ide dan/atau kampanye penggalangan dana yang ada di dalam Situs;</p>     

                <p class="paragraf-sk">8. Donasi yang masuk ke sedekahonline tanpa memakai kode unik dan tidak melakukan konfirmasi akan dicatat sebagai donasi umum yang kemudian disalurkan oleh sedekahonline ke random campaign</p>       
            </div>
            <div class="tab-pane fade" id="nav-umum" role="tabpanel" aria-labelledby="nav-umum-tab">
                <p class="judul-isi-sk-umum">Kewajiban Pengguna Situs:</p>

                <p class="paragraf-sk-umum">1. Wajib menyatakan diri sebagai seseorang yang cakap di mata hukum sehingga dapat mempertanggungjawabkan segala tindakan yang merupakan kelalaian dan/atau pelanggaran atas syarat dan ketentuan penggunaan Situs.</p>

                <p class="paragraf-sk-umum">2. Wajib memberikan data dan informasi dengan benar, tidak menyesatkan, dan/atau pemalsuan.</p>

                <p class="judul-isi-sk-umum">Larangan</p>

                <p class="paragraf-sk-umum">1. Dilarang memberikan dan/atau menyuruh pihak lain untuk memberikan data atau informasi yang tidak benar, serta memalsukan data atau keterangan pihak lain.</p>

                <p class="paragraf-sk-umum">2. Dilarang melakukan dan/atau menyuruh pihak lain untuk melakukan tindakan apapun yang dapat menyebabkan pelanggaran terhadap sebagian atau seluruh hak kekayaaan intelektual dari Pengelola Situs maupun Pengguna Situs lainnya.</p>

                <p class="paragraf-sk-umum">3. Dilarang melakukan dan/atau menyuruh pihak lain untuk melakukan tindakan apapun yang dapat merusak, mengganggu, atau membatasi sistem pada Situs.</p>

                <p class="paragraf-sk-umum">4. Dilarang melakukan dan/atau menyuruh pihak lain untuk melakukan tindakan apapun yang bertentangan dengan hukum, melanggar kesusilaan, maupun melanggar hak Pengelola maupun hak pihak Pengguna Situs lainnya.</p>

            </div>
        </div>
    </div>
</div>
<!-- Akhir Nav Tabs SK -->

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