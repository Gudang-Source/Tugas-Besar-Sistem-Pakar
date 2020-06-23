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
                    <h4 class="pb-30">Silahkan Masukkan Data Untuk Merental Kendaraan</h4>
                    <form class="form" method="POST" action="{{ url('/hasil') }}">
                        @csrf
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="nama_peminjam"
                                placeholder="Nama Peminjam" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'nama'">
                            @if ($errors->has('nama_peminjam'))
                            <span class="help-block">
                                {{ $errors->first('nama_peminjam') }}
                            </span>
                            @endif
                            <input class="form-control txt-field" type="number" name="durasi"
                                placeholder="Durasi / hari" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Durasi / hari '">
                            @if ($errors->has('durasi'))
                            <span class="help-block">
                                {{ $errors->first('durasi') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="input-group dates-wrap">
                                <input id="datepicker2" class="dates form-control" placeholder="Tanggal Pinjam"
                                    type="text" name="mulai_pinjam">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                </div>
                            </div>
                            @if ($errors->has('mulai_pinjam'))
                            <span class="help-block">
                                {{ $errors->first('mulai_pinjam') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select">
                                <select name="keperluan">
                                    <option value="" disabled selected hidden>Keperluan</option>
                                    @foreach ($kendaraan as $k)
                                    @if ($k->id_kategori == 1)
                                    <option value="{{ $k->kode_kendaraan }}">{{ $k->keterangan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('keperluan'))
                            <span class="help-block">
                                {{ $errors->first('keperluan') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <select name="medan">
                                    <option value="" disabled selected hidden>Jenis Medan</option>
                                    @foreach ($kendaraan as $k)
                                    @if ($k->id_kategori == 2)
                                    <option value="{{ $k->kode_kendaraan }}">{{ $k->keterangan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('medan'))
                            <span class="help-block">
                                {{ $errors->first('medan') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <select name="roda">
                                    <option value="" disabled selected hidden>Jumlah Roda</option>
                                    @foreach ($kendaraan as $k)
                                    @if ($k->id_kategori == 3)
                                    <option value="{{ $k->kode_kendaraan }}">{{ $k->keterangan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('roda'))
                            <span class="help-block">
                                {{ $errors->first('roda') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <select name="kursi">
                                    <option value="" disabled selected hidden>Jumlah Kursi</option>
                                    @foreach ($kendaraan as $k)
                                    @if ($k->id_kategori == 4)
                                    <option value="{{ $k->kode_kendaraan }}">{{ $k->keterangan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('kursi'))
                            <span class="help-block">
                                {{ $errors->first('kursi') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <select name="perjalanan">
                                    <option value="" disabled selected hidden>Perjalanan</option>
                                    @foreach ($kendaraan as $k)
                                    @if ($k->id_kategori == 5)
                                    <option value="{{ $k->kode_kendaraan }}">{{ $k->keterangan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('perjalanan'))
                            <span class="help-block">
                                {{ $errors->first('perjalanan') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="default-select" id="default-select2">
                                <select name="tambahan">
                                    <option value="" disabled selected hidden>Fitur Tambahan</option>
                                    @foreach ($kendaraan as $k)
                                    @if ($k->id_kategori == 6)
                                    <option value="{{ $k->kode_kendaraan }}">{{ $k->keterangan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('tambahan'))
                            <span class="help-block">
                                {{ $errors->first('tambahan') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit"
                                class="btn btn-default btn-lg btn-block text-center text-uppercase">Cari Rekomendasi
                                Kendaraan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


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
