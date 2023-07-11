<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="icon" href="{{ asset('img/logo.ico') }}">
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="#">STT Bandung</a>
            </h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    @if($__env->yieldContent('type') == 'home')
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#jurusan">Jurusan</a></li>
                    <li><a href="#pmb">PMB</a></li>
                    @elseif($__env->yieldContent('type') == 'admin')
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('home') }}#about">Tentang</a></li>
                    <li><a href="{{ route('home') }}#jurusan">Jurusan</a></li>
                    <li><a href="{{ route('home') }}#pmb">PMB</a></li>
                    @else
                    {{-- no add menu --}}
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="{{ route('direct_admin') }}" class="get-started-btn">@yield('btn')</a>
        </div>
    </header>

    @yield('content')

    <footer id=@yield('type-footer')>
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    Copyright &copy;
                    <?php echo date('Y'); ?>
                    <strong><span>Riko Januar Sawaludin</span></strong>
                </div>
                <div class="footer-text">20552011196 - TIF K 20 (Prog. Web 2)</div>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
</body>
<script src="{{ asset('js/main.js') }}"></script>

</html>