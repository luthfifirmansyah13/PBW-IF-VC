<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
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
    <div class="container mt-5">
        <!-- Header Section -->
        <header class="mb-4 text-center">
            <h1>Daftar Produk</h1>
        </header>

        <!-- Action Section -->
        <section class="mb-3 text-right">
            <a href="{{ route('items.create') }}" class="btn thread-dark">Tambah Produk</a>
        </section>

        <!-- Table Section -->
        <section class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Delete Form -->
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>
