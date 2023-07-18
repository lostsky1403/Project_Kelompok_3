<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Tambah Transaksi</h1>
        <br>
        <a href="/profile" class="btn btn-primary">
            < Back</a>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                        <ul>
                            {{-- @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach --}}
                        </ul>
                    </div>
                @endif

                <form action="/profile" method="post" class="mx-2">
                    <div class="form-group mt-3">
                        @csrf
                        <label for="ID">ID</label>
                        <input type="number" class="form-control" name="nama" value="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="User ID">User ID</label>
                        <input type="text" class="form-control" name="ahli" value=""
                            placeholder="Masukkan User ID">
                    </div>

                    <div class="form-group mt-3">
                        <label for="desc">Description</label>
                        <input type="text" class="form-control" name="telp" placeholder="Tulis Deskripsi"
                            value="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" name="alamat" placeholder="Masukkan Nominal">
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
