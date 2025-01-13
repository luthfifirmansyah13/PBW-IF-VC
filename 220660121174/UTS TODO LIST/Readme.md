Cara Kerja
1. Koneksi Database (config/Database.php)
File Database.php bertanggung jawab untuk membuat koneksi PDO ke database MySQL. Kelas ini menggunakan kredensial yang disediakan (host, nama database, username, password) untuk menghubungkan dan menangani kesalahan jika koneksi gagal.

2. Model Todo (models/TodoModel.php)
Kelas TodoModel.php berinteraksi langsung dengan database. Kelas ini memiliki metode untuk mengambil semua todo (getAllTodos), menambahkan todo baru (createTodo), memperbarui status todo (updateTodoStatus), dan menghapus todo (deleteTodo).

3. Controller Todo (controllers/TodoController.php)
Kelas TodoController.php menangani logika aplikasi. Kelas ini mengelola interaksi antara pengguna dan model. Ini termasuk:

index(): Mengambil semua todo dari model dan menampilkan tampilan.
add(): Menambahkan todo baru ke database berdasarkan input pengguna.
delete(): Menghapus todo dari database berdasarkan ID.
4. Tampilan (views/ListTodos.php)
File ListTodos.php bertanggung jawab untuk menampilkan antarmuka pengguna. Ini termasuk form untuk menambahkan tugas baru dan daftar semua tugas. Setiap tugas dapat dihapus dengan mengklik tautan di sebelahnya.

5. Titik Masuk Utama (index.php)
File index.php bertindak sebagai titik masuk utama untuk aplikasi. File ini mengatur routing berdasarkan aksi (misalnya add, delete) dan memanggil metode yang sesuai di controller. Itu juga memuat model untuk berinteraksi dengan database dan meneruskan data ke tampilan.

Contoh Penggunaan
Menambahkan Tugas:
Masukkan nama tugas di kolom input dan klik tombol "Add".
Melihat Semua Tugas:
Semua tugas akan ditampilkan dalam daftar, dengan opsi untuk menghapusnya.
Menghapus Tugas:
Klik tautan "Delete" di sebelah tugas untuk menghapusnya dari daftar.
Penataan
Aplikasi ini menggunakan file CSS sederhana (asset/style.css) untuk menata antarmuka pengguna. Desainnya minimalis dan responsif.

Desain Responsif
Aplikasi ini dirancang untuk responsif, sehingga akan menyesuaikan dengan berbagai ukuran layar, termasuk perangkat tablet dan seluler.