@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
<!-- background Artikel -->
<div class="bg-faq"></div>
<!-- background Artikel -->

<div class="border-atas-faq">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-1">
                <input class="form-group-faq" for="" placeholder="Isi Disini">
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-border-faq">CARI</button>
            </div>
        </div>
    </div>
</div>

<div class="bg-isi-faq">
    <div class="container">
        <div class="isi-faq">
            <h4 class="judul-faq" >Pertanyaan Umum Donatur</h4>
            
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="heading-1">
                        <h5 class="mb-0">
                            <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1" class="link-judul-faq">
                            Bagaimana Cara Mendaftar dan mendapatkan USER LOGIN pada Kotakamal.com?
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
                        <div class="card-body card-body-faq">
                            <p>1. Klik website atau aplikasi Android sedekahonline.com <br></p> 
                            <p>2. Klik tombol Daftar pada pojok kanan atas <br></p>
                            <p>3. Saat ini anda bisa login menggunakan Email, Facebook dan ID Paytren <br></p>
                            <p>4. Jika tidak mempunyai Akun Google bisa daftar menggunakan email lain caranya isi daftar nama dan email aktif Anda <br></p>
                            <p>5. Kemudian cek email Anda di Kotak masuk/Spam/Update/promotion untuk melakukan aktifasi akun Sedekah Online.  <br> (Apabila email dari sedekahonline.com atau Daarul Quran masuk spam, segera tandai bukan SPAM pada email Anda, agar notifikasi email selanjutnya dapat masuk ke Inbox) <br></p>
                            <p>5. Kemudian klik link aktifasi akun sekarang dan akan melanjutkan ganti password di web Sedekahonline.com</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header " id="heading-2">
                        <h5 class="mb-0">
                            <a class="collapsed link-judul-faq" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                Perihal Modul History Sedekah Anda
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                        <div class="card-body card-body-faq">
                            <p>Modul Histori Sedekah merupakan catatan atau histori komitmen sedekah yang telah Anda lakukan sebelumnya jika sudah terkonfirmasi secara system.</p>

                            <p>Melalui modul ini Anda dapat melakukan Konfirmasi Transfer Sedekah yang telah Anda lakukan atas komitmen sedekah yang telah Anda tentukan pada suatu Program Sedekah. Setiap data histori sedekah ini diwakili oleh sebuah nomor Voucher Sedekah yang akan terlihat berbeda sesuai dengan status yang telah Anda lakukan. Berikut adalah penjelasan detailnya : </p> 
                            
                            <p> 1. Tombol No.Voucher Sedekah berwarna Merah, berarti komitmen sedekah ini belum Anda konfirmasikan atas penyetoran sedekah yang telah Anda lakukan. </p>

                            <p> 2. Tombol No.Voucher Sedekah berwana Kuning, berarti konfirmasi penyetoran sedekah telah Anda kirimkan atas komitmen sedekah ini dan sedang menunggu proses Validasi atas pembayarannya. </p>

                            <p> 3. No.Voucher Sedekah berwarna Hijau, berarti Penyetoran Sedekah atas komitmen sedekah ini telah tervalidasi pembayarannya dan data komitmen sedekah ini akan ditampilkan pada Modul Sedekah Terkonfirmasi yang dapat dilihat pada menu Sedekah Terkonfirmasi sesuai dengan program sedekahnya. </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading-3">
                        <h5 class="mb-0">
                            <a class="collapsed link-judul-faq" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                Cara Berpartisipasi dalam Program Sedekah
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
                        <div class="card-body card-body-faq">
                            <p>Untuk berpartisipasi dalam Program Sedekah ini ada 2 pilihan yang bisa Anda Gunakan Yaitu Donatur : Hamba Allah dan USER LOGIN untuk caranya bisa anda lihat di Menu FAQ Pertanyaan Populer Donatur </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading-4">
                        <h5 class="mb-0">
                            <a class="collapsed link-judul-faq" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                Cara Berpartisipasi dalam Program Sedekah
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-4">
                        <div class="card-body card-body-faq">
                            <p>PPPA Daarul Qur'an adalah lembaga pengelola sedekah yang berkhidmad pada pembangunan masyarakat berbasis tahfizhul Qur'an yang dikelola secara profesional dan akuntabel. Penerima manfaat kami tersebar di 411 kabupaten di 34 provinsi dan 7 Negara. </p>
                            <p>Program Sedekah ini merupakah program sedekah yang diselenggarakan oleh PPPA Daarul Qur'an sebagai wadah untuk menampung penyaluran Dana Sedekah, Zakat dan Wakaf atas suatu program Pendidikan dan Dakwah, Sosial dan Kemanusiaan serta Pengembangan Masyarakat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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