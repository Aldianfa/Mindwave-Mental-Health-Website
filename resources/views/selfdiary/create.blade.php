<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindWave | Create Selfdiary</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/selfdiary/dashboard.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/selfdiary.css') }}"> --}}

    <style type="text/css">
        @font-face {
            font-family: "Days";
            src: url("{{ asset('assets/plugins/font-days/Days.otf') }}");
        }
    </style>
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navi fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/7.png') }}" width="40" height="40" class="img-circle">
                <div class="navbar-brand-text fw-bold fs-4 me-auto" href="">
                    Halo {{ Auth::user()->username }} !
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <img src="{{ asset('assets/img/logo.png') }}" width="50" class="">
                    </li>
                </ul>
                <a href="{{ route('pengguna.logout') }}" class="btn btn-logout" role="button"><i
                        class="bi bi-box-arrow-right"></i></a>

            </div>

        </div>
    </nav>
    {{-- NAVBAR --}}

    {{-- SECTION 1 --}}
    <section class="content mt-10">
        <div class="container">
            <h1>Halo</h1>
        </div>
    </section>
    {{-- SECTION 1 --}}

    {{-- SECTION 2 --}}
    <section class="content mt-10">
        <div class="container">
            <h3 class="text-header">Ceritakan Harimu</h3>
            <br>
            <form action="{{ route('selfdiary.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Cerita</label>
                    <textarea class="form-control" id="isi" name="isi" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="d-md-flex">
                    <div class="col-md-6">
                        <a href="{{ route('selfdiary.dashboard') }}" class="btn btn-kembali col-12">Kembali</a>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-simpan col-12"
                            >Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
    {{-- SECTION 2 --}}

    {{-- SECTION 3 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ $message }}',
                showConfirmButton: true,
                timer: 3000
            })
        </script>
    @elseif ($message = Session::get('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ $message }}',
                showConfirmButton: true,
                timer: 3000
            })
        </script>
    @endif

</body>
