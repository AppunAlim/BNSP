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

<body class="antialiased" style="background-color: lightgray">
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
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row justify-content-center align-items-center">
            <div style="col-lg-4">
                <di v class="table-responsive">
                    @if (session('message'))
                        <div class="bg-info p-5">
                            <div class="header-title">
                                <h1 class="index-rejected-header-title-text text-white">{{ session('message') }}
                                </h1>
                            </div>
                        </div>
                    @endif

                    <form id="myForm" action="{{ route('hasil', ['id' => $daftar->id]) }}" enctype="multipart/form-data" method="get" class="shadow p-3 mb-2 bg-light rounded">
                        <div class="text-center fw-bold fs-4 mb-2">Data Anda</div>

                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="nama" class="form-label fs-5 fw-bold">Nama :</label>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">{{ $daftar->nama }}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="form-label fs-5 fw-bold">Email :</label>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">{{ $daftar->email }}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="no_hp" class="form-label fs-5 fw-bold">No HP :</label>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">{{ $daftar->no_hp }}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="semester" class="form-label fs-5 fw-bold">Semester :</label>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">{{ $daftar->semester }}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label fs-5 fw-bold">IPK Terakhir :</label>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">{{ $daftar->ipk }}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label fs-5 fw-bold">Status Pengajuan :</label>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">{{ $daftar->status_pengajuan }}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label fs-5 fw-bold">Pilihan Beasiswa :</label>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">{{ $daftar->beasiswa->nama_beasiswa }}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="file" class="form-label fs-5 fw-bold">Uploaded Berkas :</label>
                                <div class="d-flex align-items-center">
                                    @if($daftar->upload != 'Tidak Masuk Kreteria')
                                        <a href="{{ asset( $daftar->upload) }}" download>{{ basename($daftar->upload) }}</a>
                                    @else
                                        <p>{{ $daftar->upload }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
<script>
    function goBack() {
        window.location.href = document.referrer;
    }
    function downloadFile(url) {
        // Membuat elemen <a> baru
        var link = document.createElement('a');
        link.href = url;
        // Menyembunyikan elemen <a> agar tidak terlihat di halaman
        link.style.display = 'none';
        // Menambahkan atribut download agar file diunduh saat di-klik
        link.setAttribute('download', '');
        // Menambahkan elemen <a> ke dalam DOM (Document Object Model)
        document.body.appendChild(link);
        // Memulai proses unduhan
        link.click();
        // Menghapus elemen <a> dari DOM setelah proses unduhan selesai
        document.body.removeChild(link);
    }

    function cantClick() {
        event.preventDefault();
    }

</script>

</html>
