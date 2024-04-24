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

<body class="antialiased" style="background-color:rgb(164, 163, 163) ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ml-5 sticky-top">
        <a class="navbar-brand ms-4" href="#">Beasiswa Akademik</a>
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
    <h1 class="d-flex m-4 text-white fw-bold">Apa Yang Dimaksud Dengan Beasiswa Non Akademik?</h1>
    <div class="container d-flex mt-5">
        <div class="row">
            <div class="col-lg-12 mb-7">

                <div class="mx-3 p-3 h-300 rounded-3" style="background-color: lightgray">
                    <span class="h5">Beasiswa Non Akademik </span> merupakan Beasiswa Beasiswa S1 non-akademik adalah jenis bantuan keuangan yang diberikan kepada mahasiswa yang tidak didasarkan pada prestasi akademik mereka.
                    Ini berarti penerima beasiswa tidak dipilih berdasarkan nilai atau pencapaian akademik seperti IPK tinggi. Tetapi, berdasarkan faktor-faktor lain, seperti bakat, keahlian khusus, prestasi di luar ruang kelas, atau kontribusi dalam berbagai bidang non-akademik, seperti olahraga, seni, kewirausahaan, kepemimpinan, atau layanan sosial.
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mx-3 p-3 h-300 rounded-3 mt-5 mb-5" style="background-color: lightgray">
                    <span class="h5">Contoh Beasiswa Non Akademik </span> Berikut adalah 5 jenis beasiswa S1 non-akademik yang tersedia untuk mereka yang memiliki bakat, keahlian khusus, prestasi di luar ruang kelas, atau kontribusi dalam berbagai bidang non-akademik:

                    Beasiswa Kepemimpinan: Menyediakan dukungan finansial untuk individu yang telah menunjukkan bakat kepemimpinan yang luar biasa dalam berbagai konteks. Contohnya adalah program Fulbright, Chevening, atau program beasiswa dari universitas terkemuka.
                    Beasiswa Olahraga: Ditujukan untuk mereka yang memiliki prestasi dalam bidang olahraga. Beasiswa ini biasanya mencakup biaya kuliah, akomodasi, dan dukungan finansial lainnya, dan ditawarkan oleh banyak universitas di luar negeri.
                    Beasiswa Seni dan Kreativitas: Untuk individu yang memiliki bakat dalam seni, musik, teater, atau bidang seni kreatif lainnya. Beberapa universitas seni terkemuka dan yayasan seni menawarkan beasiswa besar untuk mahasiswa internasional.
                    Beasiswa Sosial dan Kemanusiaan: Menyediakan dukungan finansial bagi mereka yang memiliki rekam jejak dalam kerja sosial atau kemanusiaan. Beasiswa ini sering kali meminta calon penerima menunjukkan kontribusi mereka dalam bidang tersebut.
                    Beasiswa Kewirausahaan: Untuk calon pengusaha muda dengan ide-ide bisnis yang inovatif. Beberapa beasiswa bahkan menyertakan akses ke inkubator bisnis dan mentor untuk membantu pengembangan bisnis mereka
                </div>
            </div>
        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</html>
