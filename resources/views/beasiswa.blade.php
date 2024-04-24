<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hasil</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="antialiased" style="background-color:rgb(118, 118, 118) ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ml-5 sticky-top">
        <a class="navbar-brand ms-4" href="#">Pendaftaran Beasiswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{route('beasiswa')}}">Pilihan Beasiswa</a>
                <a class="nav-item nav-link" href="{{ route('daftar') }}">Daftar</a>
                <a class="nav-item nav-link" href="{{ route('pendaftar') }}">Pendaftar Lainnya</a>

            </div>
        </div>
    </nav>
    <h1 class="d-flex justify-content-center align-item-center mt-4 text-white">Informasi Mengenai Beasiswa</h1>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="row justify-content-around align-items-around">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <a href="{{route('akademik')}}" class="nav-item nav-link">
                <div class="shadow mx-3 p-3 rounded-3 fs-5 text-center" style="background-color: lightgray; width: 350px">
                    Beasiswa Akademik
                </div>
            </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <a href="{{route('nonAkademik')}}" class="nav-item nav-link">
                <div class="shadwo mx-6 p-3 rounded-3 fs-5 text-center" style="background-color: lightgray; width: 400px">
                    Beasiswa Non Akademik
                </div>
            </a>
            </div>
        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</html>
