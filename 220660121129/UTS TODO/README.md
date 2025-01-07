Aplikasi Todo List Web (PHP)

Aplikasi Todo List sederhana yang dibangun menggunakan PHP, yang memungkinkan pengguna untuk menambah, menyelesaikan, dan menghapus tugas. Aplikasi ini menyediakan antarmuka yang bersih dan mudah digunakan untuk mengelola tugas. Aplikasi ini menggunakan PHP untuk logika backend, dan HTML/CSS untuk tampilan frontend.

Fitur

- Menambah tugas baru ke dalam daftar todo.
- Menandai tugas sebagai selesai.
- Menghapus tugas dari daftar.
- Menampilkan tugas beserta status penyelesaiannya.
- Antarmuka pengguna minimalis dengan notifikasi dasar.

Instalasi

1. Clone repositori ini ke mesin lokal Anda:
    ```bash
    git clone <https://github.com/satriakamal/PBW-IF-VC.git>
    ```

2. Pindahkan file-file ke direktori root server web Anda (misalnya, `htdocs` untuk XAMPP atau `www` untuk WAMP).

3. Pastikan ekstensi PHP untuk manajemen sesi telah diaktifkan.

4. Buka browser Anda dan akses `http://localhost/UTS TODO`.

Struktur File

Proyek ini terdiri dari file dan direktori berikut:

- `index.php`: File utama untuk menangani routing dan menampilkan daftar todo.
- `controllers/TodoController.php`: Kelas PHP untuk mengelola logika menambah, menyelesaikan, dan menghapus tugas.
- `views/listTodos.php`: File tampilan HTML untuk menampilkan daftar todo dan form.
- `assets/css/style.css`: File stylesheet untuk halaman todo list.
- `assets/js/script.js`: File JavaScript untuk notifikasi dan fungsionalitas lainnya.

Cara Kerja

1. Menambah Tugas:
    - Pengguna dapat menambahkan tugas baru melalui form di halaman utama.
    - Ketika form disubmit, aksi `add` di `index.php` akan dipicu, dan tugas ditambahkan ke daftar melalui `TodoController`.

2. Menandai Tugas sebagai Selesai:
    - Pengguna dapat menandai tugas sebagai selesai dengan mengklik tombol "Selesai" di samping tugas.
    - Ini akan memicu aksi `complete` di `index.php`, yang memperbarui status tugas di backend.

3. Menghapus Tugas:
    - Setiap tugas memiliki tombol hapus yang akan menghapusnya dari daftar todo ketika diklik.
    - Ini akan memicu aksi `delete` di `index.php`, yang akan menghapus tugas dari backend.