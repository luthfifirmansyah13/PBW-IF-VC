<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .thread-dark {
            background-color: #343A40;
            color: #ffffff;
        }

        .thread-dark:hover {
            background-color: #8c8c8c;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="shadow-sm card">
            <div class="card-header thread-dark">
                <h1 class="mb-0 h4">Tambah Produk Baru</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('items.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 form-group">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" id="price" name="price" class="form-control" required>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn thread-dark">Simpan Produk</button>
                        <a href="{{ route('items.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
