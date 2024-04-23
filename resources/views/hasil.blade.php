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

{{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}


<body class="antialiased">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12">
                <h1 class="mb-4">Pendaftar Beasiswa</h1>
                <button class="btn btn-primary mb-4 text-white"><a href="/" class="text-white"
                        style="text-decoration: none;">back</a></button>
            </div>
            <div style="col-lg-4">
                <div class="table-responsive"> <!-- Wrap the table in a div with class "table-responsive" -->
                    <table id="listTable" class="table table-striped rounded box-shadow bg-light p-2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Semester</th>
                                <th scope="col">IPK</th>
                                <th scope="col">Pilihan Beasiswa</th>
                                <th scope="col">Berkas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 0 @endphp <!-- Define $i variable -->
                            @foreach ($daftar as $c)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>{{ $c->nama }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->no_hp }}</td>
                                    <td>{{ $c->semester }}</td>
                                    <td>{{ $c->ipk }}</td>
                                    <td>{{ $c->pilihan_beasiswa }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $c->upload) }}"
                                            download="{{ $c->upload }}">Download</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
<script>
    function goBack() {
        window.location.href = document.referrer;
    }
</script>

</html>
