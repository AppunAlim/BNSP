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
    <div class="navbar-links d-none">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Daftar</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Beasiswa</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Hasil</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
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
                                <option value="1" disabled>pilih semester</option>
                                <option value="2">Semester 1</option>
                                <option value="3">Semester 2</option>
                                <option value="4">Semester 3</option>
                                <option value="5">Semester 4</option>
                                <option value="6">Semester 5</option>
                                <option value="7">Semester 6</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-content-center">
                        <div class="col-lg-3 mb-2">
                            <label for="ipk" class="form-label">IPK</label>
                            <input type="number" class="form-control bg-gray-900" name="ipk" id="ipk"
                                readonly>
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="pilihan_beasiswa" class="form-label">Pilihan Beasiswa</label>
                            <select class="form-select" name="pilihan_beasiswa" id="pilihan_beasiswa">
                                @if ($beasiswa)
                                    @foreach ($beasiswa as $b)
                                        @if ($b)
                                            <option value="Reguler" hidden>Reguler</option>
                                            <option value="{{ $b->nama_beasiswa }}">{{ $b->nama_beasiswa }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        {{-- <div class="col-lg-3 mb-2">
                            <label for="status_pengajuan" class="form-label">Status Pengajuan</label>
                            <input type="option" class="form-control" name="status_pengajuan" id="status_pengajuan">
                        </div> --}}
                        <div class="col-lg-3 mb-2">
                            <label for="file" class="form-label">Upload Berkas</label>
                            <input type="file" class="form-control" name="upload" id="upload">
                        </div>
                        <div class="col-lg-3 mt-4">
                            <button type="button" class="btn btn-danger" onclick="resetForm()">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i> Save
                            </button>
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
        document.getElementById("myForm").reset(); // Replace "myForm" with the ID of your form
    }

    document.addEventListener('DOMContentLoaded', function() {
        const ipkPengguna = ipk();
        const kolomIPK = document.getElementById('ipk');
        const pilihanBeasiswa = document.getElementById('pilihan_beasiswa');

        kolomIPK.value = ipkPengguna.toFixed(2);

        if (ipkPengguna < 3.00) {
            pilihanBeasiswa.setAttribute('readonly', 'readonly');
            pilihanBeasiswa.removeAttribute('required'); // Remove the required attribute
        } else {
            pilihanBeasiswa.removeAttribute('readonly');
            pilihanBeasiswa.setAttribute('required', 'required'); // Add the required attribute
        }
    });

    function ipk() {
        return Math.random() * 2 + 2;
    }
</script>


</html>
