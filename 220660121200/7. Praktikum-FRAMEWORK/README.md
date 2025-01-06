Proyek Laravel Authentication
Mata Kuliah: Pemrograman Berbasis Web (PBW)
Nama: Usep Suherman
NIM: 220660121200

Deskripsi Proyek
Proyek ini adalah implementasi sistem autentikasi berbasis Laravel untuk Login dan Register. Sistem ini dirancang untuk mempermudah proses pengelolaan pengguna dan menjaga akses halaman tertentu dengan keamanan berbasis middleware auth.

Melalui proyek ini, mahasiswa diharapkan dapat memahami cara kerja autentikasi di Laravel dan menguasai alur pengembangan aplikasi berbasis web.

Tujuan Pembelajaran
Memahami konsep dasar autentikasi dalam framework Laravel.
Mengimplementasikan Login, Register, dan proteksi halaman berbasis middleware.
Meningkatkan keterampilan pengembangan aplikasi berbasis MVC (Model-View-Controller).
Mempraktikkan kolaborasi antara Backend dan Frontend menggunakan Blade Template.
Fitur yang Dikembangkan
Autentikasi Pengguna

Register: Form untuk pendaftaran akun baru.
Login: Halaman untuk login ke aplikasi menggunakan akun terdaftar.
Logout: Tombol keluar untuk mengakhiri sesi pengguna.
Proteksi Halaman

Halaman tertentu hanya dapat diakses oleh pengguna yang telah login.
Validasi Data

Input pengguna divalidasi untuk menjaga keakuratan data.
Pengalaman Pengguna yang Optimal

Tampilan sederhana dan responsif untuk mempermudah navigasi pengguna.
Prasyarat
Sebelum memulai, pastikan perangkat Anda memiliki:

PHP >= 7.4
Composer
Node.js & npm
MySQL
Langkah Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek ini:

Clone Repository

bash
Copy code
git clone https://github.com/usep-it/220660121200/7.Praktikum-Framework.git
cd 7.Praktikum-Framework
Instalasi Dependensi Backend

bash
Copy code
composer install
Instalasi Dependensi Frontend

bash
Copy code
npm install
Konfigurasi Database

Salin file .env.example menjadi .env
bash
Copy code
cp .env.example .env
Sesuaikan konfigurasi database pada file .env:
env
Copy code
DB_DATABASE=nama_database
DB_USERNAME=user_database
DB_PASSWORD=password_database
Generate Application Key

bash
Copy code
php artisan key:generate
Migrasi Database

bash
Copy code
php artisan migrate
Jalankan Aplikasi

bash
Copy code
php artisan serve
Buka browser dan akses aplikasi melalui URL:

arduino
Copy code
http://127.0.0.1:8000