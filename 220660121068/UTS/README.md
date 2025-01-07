# Todo List Web Application

## Deskripsi

Aplikasi Todo List ini memungkinkan pengguna untuk menambahkan, mengedit, menandai tugas sebagai selesai, dan menghapus tugas dalam daftar mereka. Aplikasi ini menggunakan PHP untuk server-side processing dan HTML, CSS, serta JavaScript untuk client-side interaksi.

## Fitur

- **Menambahkan Tugas**: Pengguna dapat menambahkan tugas baru ke dalam daftar.
- **Menyelesaikan Tugas**: Pengguna dapat menandai tugas sebagai selesai dengan tombol "Selesai".
- **Mengedit Tugas**: Pengguna dapat mengedit tugas yang sudah ada.
- **Menghapus Tugas**: Pengguna dapat menghapus tugas dari daftar.
- **Notifikasi**: Aplikasi menampilkan notifikasi dengan ikon yang sesuai untuk aksi yang dilakukan (menambah, mengedit, menyelesaikan, atau menghapus tugas).
  

## Teknologi yang Digunakan

- **Frontend**:
  - HTML5
  - CSS3 (untuk tampilan responsif dan modern)
  - JavaScript (untuk interaksi pengguna)
  - Font Awesome (untuk ikon notifikasi)

- **Backend**:
  - PHP (untuk logika pengolahan data seperti menambah, mengedit, menyelesaikan, dan menghapus tugas)

## Cara Penggunaan

1. **Clone atau Download Repository**:
    - Clone repository ini dengan perintah berikut:
      ```bash
      git clone https://github.com/username/todolist.git
      ```

2. **Instalasi**:
    - Pastikan server PHP sudah terinstal di komputer Anda. Jika belum, Anda bisa menginstal **XAMPP** atau **MAMP** yang sudah menyediakan PHP, MySQL, dan Apache.
    
    - Pindahkan folder aplikasi ini ke direktori server lokal Anda (misalnya, `htdocs` di XAMPP atau `www` di MAMP).

3. **Pengaturan Database**:
    - Buat database baru di MySQL (misalnya, `todolist`).
    - Buat tabel `todos` dengan struktur berikut:
      ```sql
      CREATE TABLE todos (
          id INT AUTO_INCREMENT PRIMARY KEY,
          task VARCHAR(255) NOT NULL,
          is_completed BOOLEAN DEFAULT 0
      );
      ```
    
4. **Menjalankan Aplikasi**:
    - Jalankan server PHP lokal Anda.
    - Buka aplikasi di browser dengan mengakses `http://localhost/todolist`.

5. **Interaksi dengan Todo List**:
    - Tambah tugas baru dengan memasukkan teks pada input dan menekan tombol **Tambah**.
    - Tandai tugas sebagai selesai dengan tombol **Selesai**.
    - Edit tugas yang ada dengan tombol **Update**.
    - Hapus tugas dengan tombol **Hapus**.

6. **Notifikasi**:
    - Setelah melakukan aksi seperti menambahkan, menyelesaikan, mengedit, atau menghapus tugas, notifikasi dengan ikon yang relevan akan muncul di bagian atas daftar tugas.

## Strukur Direktori

