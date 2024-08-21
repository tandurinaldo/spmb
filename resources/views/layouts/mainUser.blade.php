<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <title>PMB</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkgray;">
        <div class="container-fluid d-flex flex-col flex-lg-row p-4 p-lg-0">
            <img src="/img/logo1.png" alt="Bootstrap" width="100" height="65" class="m-4">
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/beasiswa">Beasiswa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Fakultas dan Jurusan
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Fakultas Teknik
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/elektro">S1 Teknik Elektro</a></li>
                                    <li><a class="dropdown-item" href="/arsi">S1 Arsitektur</a></li>
                                    <li><a class="dropdown-item" href="/sipil">S1 Teknik Sipil</a></li>
                                    <li><a class="dropdown-item" href="/infor">S1 Teknik Informatika</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Fakultas Sastra dan Pendidikan Bahasa
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="/sastra">S1 Sastra Inggris</a></li>
                                    <li><a class="dropdown-item" href="/mandarin">S1 Pendidikan Bahasa Mandarin</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Fakultas Ekonomi
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/akun">S1 Akuntan</a></li>
                                    <li><a class="dropdown-item" href="/manaj">S1 Manajemen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Contact Person
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="https://wa.me/+6285100979475?text=Terimakasih%20telah%20menggunakan%20fitur%20chat%20ini%3A%0ANama%3A%0AAsal%20sekolah%3A%0AJurusan%20yang%20diminati%3A%0AKelas%20pagi%20/%20sore%20(kelas%20karyawan)%3A">Bu
                                    Jinap</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="https://wa.me/+6281356594211?text=Terimakasih%20telah%20menggunakan%20fitur%20chat%20ini%3A%0ANama%3A%0AAsal%20sekolah%3A%0AJurusan%20yang%20diminati%3A%0AKelas%20pagi%20/%20sore%20(kelas%20karyawan)%3A">Kak
                                    Afif</a></li>
                            <li><a class="dropdown-item"
                                    href="https://wa.me/+6281232770503?text=Terimakasih%20telah%20menggunakan%20fitur%20chat%20ini%3A%0ANama%3A%0AAsal%20sekolah%3A%0AJurusan%20yang%20diminati%3A%0AKelas%20pagi%20/%20sore%20(kelas%20karyawan)%3A">Bu
                                    Tian</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control mx-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-white ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Log in
                            </a>
                            <!--entah kepakai atau tidak tergantung dari permintaan user-->
                            <!--    @if (Route::has('register'))
    <a href="{{ route('register') }}"
                                                                                class="rounded-4 px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                                                style="background-color: #f94ca4">
                                                                                Register
                                                                            </a>
    @endif -->
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        @yield('navbar')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            $('#negara').on('change', function() {
                let id_negara = $('#negara').val();

                $.ajax({
                    type: 'post',
                    url: "{{ route('getprovinsi') }}",
                    data: {
                        id_negara: id_negara
                    },
                    cache: false,

                    success:: function(msg) {
                        $('#provinsi').html(msg);
                        $('#kota').('');
                        // $('#kecamatan').('');
                    },
                    error: function(data) {
                        console.log('error', data);

                    },
                })
            })
        });
    </script>
</body>

</html>
