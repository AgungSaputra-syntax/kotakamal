<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kotakamal')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logofixputih.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/sedekah">Sedekah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/zakat">Zakat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/program">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/artikel">Artikel</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        @yield('content')

        <!-- Footer Index -->
        <div class="footer-index">
            <div class="container">
                <div class="row row-footer-index">
                    <div class="col-lg-4 col-footer-index">
                        <img class="img-footer" src="img/logofixputih@2x.png" alt="">
                        <p class="text-muted-index">Ikuti Kami</p>
                        <div class="sosmed-index">
                            <img src="img/fb-putih.png" alt="">
                            <img src="img/instagram-putih.png" alt="">
                            <img src="img/twitter-pth.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-footer-index">
                        <p class="judul-text-index">PELAJARI LEBIH LANJUT </p>
                        <p class="text-index"><a href="/faq">FAQ</a></p>
                        <p class="text-index"><a href="/sk">Syarat dan Ketentuan</a></p>
                        <p class="text-index"><a href="/kebijakan">Kebijakan Privasi</a></p>
                        <p class="text-index"><a href="/tentangKami">Tentang kami</a></p>
                    </div>
                    <div class="col-lg-4 col-footer-index">
                        <p class="judul-text-index">HUBUNGI KAMI</p>
                        <p class="text-index">Masjid Al-Hurriyah</p>
                        <p class="text-index">Gd. Al Hurriyyah Lt. 1 Kampus IPB Jalan Meranti, Dramaga, Babakan Dramaga, Bogor, Jawa Barat 16680</p>
                        <p class="text-index">Telp : (021) 7345 8790 SMS/WA : 08157024777</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Index -->


        <!-- Footer Bawah Index -->
        <div class="footer-bawah-index">
            <div class="container text-center">
                <span>Copyright © 2019. All Right Reserved</span>
            </div>
        </div>
        <!-- Akhir Footer Bawah Index -->
    </div>
</body>
</html>
