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
    <h1 class="d-flex m-4 text-white fw-bold">Apa Yang Dimaksud Dengan Beasiswa Akademik?</h1>
    <div class="container d-flex mt-5">
        <div class="row">
            <div class="col-lg-12 mb-7">

                <div class="mx-3 p-3 h-300 rounded-3" style="background-color: lightgray">
                    <span class="h5">Beasiswa Akademik </span> merupakan Beasiswa Peningkatan Prestasi Akademik (PPA) adalah bantuan biaya pendidikan yang diberikan dan ditujukan bagi mahasiswa yang sedang menjalani masa studi kuliah program diploma dan sarjana di berbagai perguruan tinggi baik negeri maupun swasta di Indonesia.

                    Beasiswa ini disediakan oleh pemerintah melalui Kementrian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti). Besaran beasiswa PPA adalah Rp400.000 per-bulan dan dibayarkan langsung untuk satu semester masa studi (enam bulan).

                    Tujuan diberikannya beasiswa ini antara lain: meningkatkan motivasi belajar mahasiswa, meningkatkan prestasi mahasiswa baik dalam akademik/kurikuler, ko-kurikuler maupun ekstra kurikuler, dan menjamin penyelesaian studi mahasiswa tepat waktu.

                    Terdapat beberapa syarat yang perlu dipenuhi untuk bisa mendapatkan beasiswa ini, terutama adalah peroleh IPK minimal 3,00 dan melampirkan surat keterangan penghasilan orang tua atau wali yang telah disahkan oleh pihak berwenang.
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mx-3 p-3 h-300 rounded-3 mt-5 mb-5" style="background-color: lightgray">
                    <span class="h5">Contoh Beasiswa Akademik </span> Ada banyak beasiswa yang tersedia di Indonesia untuk mahasiswa berprestasi dan berkekurangan secara finansial. Beasiswa tersebut mencakup berbagai bidang studi dan tingkatan pendidikan. Beberapa di antaranya adalah:

                    Beasiswa BCA Finance: Untuk mahasiswa S1 dari berbagai jurusan dengan IPK minimal 3,00 untuk PTN dan minimal 3,40 untuk PTS, dengan durasi 8 semester.
                    Beasiswa Bidikmisi: Bantuan biaya pendidikan bagi calon mahasiswa tidak mampu secara ekonomi dengan potensi akademik baik, dengan durasi beasiswa sesuai tingkat pendidikan.
                    Beasiswa KIP Kuliah: Program bantuan biaya pendidikan dari pemerintah melalui Kemdikbudristek untuk mahasiswa WNI yang tidak mampu secara ekonomi, dengan durasi 8 semester.
                    Beasiswa Peningkatan Prestasi Akademik: Disediakan oleh pemerintah melalui Kemenristekdikti untuk mahasiswa PTN/PTS dengan kriteria minimal semester II dan maksimal semester VI.
                    Beasiswa Sampoerna Foundation: Untuk pelajar dan mahasiswa Indonesia yang mencakup biaya penuh pendidikan, biaya pendaftaran, serta kebutuhan lainnya seperti buku.
                    Djarum Beasiswa Plus: Untuk mahasiswa berprestasi dengan dana mencapai Rp 750.000 per bulan serta pelatihan untuk meningkatkan soft skill.
                    Beasiswa Monbukagakusho (MEXT): Beasiswa dari pemerintah Jepang untuk studi di Jepang tanpa ikatan dinas.
                    Cargill Global Scholars Program: Beasiswa dari Cargill untuk mahasiswa S1 yang mencakup bantuan keuangan dan pengembangan potensi kepemimpinan.
                </div>
            </div>
        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</html>
