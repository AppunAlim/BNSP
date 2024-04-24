<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BNSP</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="antialiased bg-secondary bg:dotted">
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
                <form id="myForm" action="{{ route('beasiswa.create') }}" enctype="multipart/form-data"
                    method="post" class="shadow p-3 mb-2 bg-light rounded">
                    <div class="text-center fw-bold fs-4">Pendaftaran Beasiswa</div>
                    <div class="text-center mb-4 fs-3">Isi Beasiswa</div>

                    @csrf
                    <div class="row align-items-start">
                        <div class="col-lg-3 mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="number" class="form-control" name="no_hp" id="no_hp">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" name="semester" id="semester">
                                <option value="Pilih" disabled>Pilih</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                                <option value="7">Semester 7</option>
                                <option value="8">Semester 8</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-content-center">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">IPK Terakhir</label>
                            <input type="text" class="form-control" id="ipk_disabled" value="{{ $ipk_random }}"
                                name="ipk_disabled" style="cursor:not-allowed; background-color: lightgray" disabled>
                            <input type="text" class="form-control" id="ipk_random" value="{{ $ipk_random }}"
                                name="ipk_random" hidden>
                        </div>
                        @if ($ipk_random < 3)
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pilihan Beasiswa</label>
                                <select id="pilihan_beasiswa" onclick="cantClick()"
                                    style="cursor: not-allowed; background-color: lightgray" class="form-select"
                                    name="pilihan_beasiswa" readonly>
                                    <option value="0" onclick="cantCant()">IPK Belum Sesuai</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Upload Berkas</label>
                                <input type="file" class="form-control"
                                    style="cursor: not-allowed; background-color: lightgray"
                                    value="TIdak masuk beasiswa" name="upload" onclick="cantClick()" id="upload"
                                    readonly>
                            </div>
                        @elseif ($ipk_random >= 3)
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pilihan Beasiswa</label>
                                <select id="pilihan_beasiswa" class="form-select" name="pilihan_beasiswa">
                                    @foreach ($beasiswa as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_beasiswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Upload Berkas</label>
                                <input type="file" class="form-control" name="upload" id="upload" required>
                            </div>
                        @endif

                        <div class="col-lg-3 mb-2 mt-4">
                            <button type="button" class="btn btn-danger" onclick="resetForm()">
                                Cancel
                            </button>
                            @if ($ipk_random < 3)
                                <button type="submit" class="btn btn-primary" disabled>Submit</button>
                            @elseif($ipk_random >= 3)
                                <button type="submit" class="btn btn-primary">Submit</button>
                            @endif
                        </div>
                    </div>


                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
<script>
    function resetForm() {
        document.getElementById("myForm").reset();
    }

    document.addEventListener('DOMContentLoaded', function() {
        const ipkPengguna = ipk();
        const kolomIPK = document.getElementById('ipk');
        const pilihanBeasiswa = document.getElementById('pilihan_beasiswa');

        kolomIPK.value = ipkPengguna.toFixed(2);

        if (ipkPengguna < 3.00) {
            pilihanBeasiswa.setAttribute('readonly', 'readonly');
            pilihanBeasiswa.removeAttribute('required');
        } else {
            pilihanBeasiswa.removeAttribute('readonly');
            pilihanBeasiswa.setAttribute('required', 'required');
        }
    });

    function cantClick() {
        event.preventDefault();
    }

    // function ipk() {
    //     return Math.random() * 2 + 2;
    // }
</script>


</html>
