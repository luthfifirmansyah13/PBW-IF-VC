Register: Form untuk pendaftaran akun baru. Login: Halaman untuk login ke aplikasi menggunakan akun terdaftar. Logout: Tombol keluar untuk mengakhiri sesi pengguna. Proteksi Halaman

Halaman tertentu hanya dapat diakses oleh pengguna yang telah login. Validasi Data

Input pengguna divalidasi untuk menjaga keakuratan data. Pengalaman Pengguna yang Optimal

Tampilan sederhana dan responsif untuk mempermudah navigasi pengguna. Prasyarat Sebelum memulai, pastikan perangkat Anda memiliki:

PHP >= 7.4 Composer Node.js & npm MySQL Langkah Instalasi Ikuti langkah-langkah berikut untuk menjalankan proyek ini:

Clone Repository

bash Copy code git clone Instalasi Dependensi Backend

bash Copy code composer install Instalasi Dependensi Frontend

bash Copy code npm install Konfigurasi Database

Salin file .env.example menjadi .env bash Copy code cp .env.example .env Sesuaikan konfigurasi database pada file .env: env Copy code DB_DATABASE=nama_database DB_USERNAME=user_database DB_PASSWORD=password_database Generate Application Key

bash Copy code php artisan key:generate Migrasi Database

bash Copy code php artisan migrate Jalankan Aplikasi

bash Copy code php artisan serve Buka browser dan akses aplikasi melalui URL:

arduino Copy code http://127.0.0.1:8000