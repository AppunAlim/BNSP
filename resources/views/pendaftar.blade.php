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

<body class="antialiased">
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
            <div class="col-lg-12">
                <h1 class="mb-4 mt-2">Pendaftar Beasiswa</h1>
            </div>
            <div style="col-lg-4">
                <div class="table-responsive">
                    @if (session('message'))
                        <div class="bg-primary p-5">
                            <div class="header-title">
                                <h1 class="index-rejected-header-title-text">{{ session('message') }}
                                </h1>
                                <h5 class="index-rejected-header-title-sub">SILAHKAN TUNGGU VERFIKASI</h5>
                            </div>
                        </div>
                    @endif

<table id="listTable" class="table table-striped table-bordered rounded box-shadow bg-light p-2">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No HP</th>
            <th scope="col">Semester</th>
            <th scope="col">IPK</th>
            <th scope="col">Pilihan Beasiswa</th>
            <th scope="col">Status Pengajuan</th>
            <th scope="col">Berkas</th>
        </tr>
    </thead>
    <tbody>
        @php $i = ($daftar->currentPage() - 1) * $daftar->perPage() @endphp
        @foreach ($daftar as $c)
            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $c->nama }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->no_hp }}</td>
                <td>{{ $c->semester }}</td>
                <td>{{ $c->ipk }}</td>
                @foreach ($beasiswa as $b)
                    @if ($c->pilihan_beasiswa == $b->id)
                        <td>{{ $b->nama_beasiswa }}</td>
                    @endif
                @endforeach
                <td>{{ $c->status_pengajuan }}</td>
                <td>
                    @if($c->upload != 'Tidak Masuk Kreteria')
                        <a href="{{ asset($c->upload) }}" download target="_blank">{{ basename($c->upload) }}</a>
                    @else
                        <p>{{ $c->upload }}</p>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $daftar->links() }}

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
<script>


</script>

</html>
