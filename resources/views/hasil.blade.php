<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Rental Mobil</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{ asset('assets/root/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/root/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/root/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/root/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/root/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/root/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/root/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/root/css/main.css') }}">
</head>

<body>
    <header id="header">
        <img src="{{ asset('assets/root/img/menu-top.png') }}" alt="">
    </header>
    <!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="col-lg col-md-6 header-right">
                    <h4 class="pb-30">Jenis Kendaraan Yang Diprediksi</h4>
                    <ul>

                        <li>Nama Peminjam : {{ $rental->nama_peminjam }}</li>
                        <li>Durasi Peminjaman : {{ $rental->durasi }}</li>
                        <li>Tanggal Peminjaman : {{ $rental->mulai_pinjam }}</li>

                        @foreach ($cari_jenis as $cj)
                            <li>Jenis Kendaraan Yang Dipinjam : {{ $cj->jns_kendaraan }}</li>
                            <li>Dengan Harga Sewa  : Rp. {{ number_format($cj->harga,2,',','.') }} / Hari</li>
                        @endforeach
                        <li>Harga Total : Rp. {{ number_format($rental->harga_total,2,',','.') }}</li>
                    </ul>
                    <a class="btn btn-info" href="{{ url('/') }}">Kembali</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <footer id="footer">
        <img class="footer-bottom" src="{{ asset('assets/root/img/footer-bottom.png') }}" alt="">
    </footer>

    <script src="{{ asset('assets/root/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/root/js/vendor/bootstrap.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('assets/root/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/root/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/root/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/root/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/root/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/root/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/root/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/root/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/root/js/main.js') }}"></script>
</body>

</html>
