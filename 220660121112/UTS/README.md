# UTS To-Do List Project

220660121112
Kaka Kalam Djati Permana

---

Ini adalah proyek aplikasi Todo List yang dibuat sebagai bagian dari UTS Pemrograman Berbasis Web. Aplikasi ini memungkinkan pengguna untuk menambahkan tugas baru, menetapkan tanggal, menandai tugas yang telah selesai, dan menghapus tugas.

---

### Cara Kerja Fungsionalitas

1. **Menambah Tugas Baru**

   - Input tugas terdapat pada bagian HTML yang berisi dua input: satu untuk deskripsi tugas (`taskInput`) dan satu lagi untuk tanggal (`dateInput`).
   - Saat pengguna mengklik tombol "Tambah", fungsi `addTask()` di JavaScript dipanggil.
   - Fungsi `addTask()` mengambil nilai dari kedua input tersebut, memastikan keduanya diisi, lalu membuat elemen `li` baru untuk menampilkan tugas di daftar (`todoList`).

2. **Menampilkan Tugas**

   - Setiap tugas ditampilkan dengan detail teks yang mencakup deskripsi dan tanggal.
   - Setiap tugas ditampilkan bersama dengan checkbox yang memungkinkan pengguna untuk menandai tugas sebagai selesai.

3. **Menandai Tugas Selesai**

   - Checkbox di samping setiap tugas memungkinkan pengguna untuk menandai tugas sebagai selesai.
   - Jika checkbox diaktifkan, JavaScript menambahkan kelas `completed` ke teks tugas, yang menyebabkan teks berubah gaya (garis coret).

4. **Menghapus Tugas**
   - Tombol "Hapus" tersedia di setiap tugas. Saat tombol ini diklik, fungsi `deleteButton.onclick` diaktifkan, yang menghapus elemen tugas dari daftar.

### Cara Menggunakan Aplikasi

1. Isi deskripsi tugas di kotak input "Tambah tugas baru...".
2. Tentukan tanggal di input tanggal.
3. Klik tombol "Tambah" untuk menambahkan tugas ke daftar.
4. Untuk menandai tugas yang sudah selesai, klik checkbox di samping tugas tersebut.
5. Untuk menghapus tugas, klik tombol "Hapus" pada tugas yang ingin dihapus.
