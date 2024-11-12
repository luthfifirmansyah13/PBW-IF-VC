Berikut adalah penjelasan mengenai kode HTML dan JavaScript di atas yang membuat sebuah aplikasi To-Do List:

Struktur HTML
1. `<html lang="id">`: Mendefinisikan bahasa dokumen sebagai Bahasa Indonesia.
2. `<head>`: Bagian ini berisi informasi metadata tentang halaman web.
   - `<meta charset="UTF-8">`: Menentukan karakter encoding yang digunakan (UTF-8).
   - `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Menyediakan pengaturan responsif untuk tampilan di perangkat mobile.
   - `<title>`: Menampilkan judul aplikasi di tab browser.
3. `<style>`: Berisi CSS untuk penataan tampilan halaman.
   - Menata tampilan halaman secara keseluruhan, seperti font, margin, dan background.
   - Menata elemen-elemen seperti input, tombol, dan daftar tugas.

Struktur Body
1. `<body>`: Bagian yang berisi elemen-elemen yang akan ditampilkan di halaman web.
   - `<div class="container">`: Elemen pembungkus yang mengatur layout aplikasi to-do list.
     - `<h1>`: Judul aplikasi yang tampil di bagian atas.
     - `<input type="text" id="taskInput" placeholder="Masukkan tugas...">`: Input teks untuk memasukkan tugas baru.
     - `<button onclick="addTask()">Tambah Tugas</button>`: Tombol yang digunakan untuk menambahkan tugas baru ke daftar saat diklik.
     - `<ul id="taskList"></ul>`: Daftar kosong yang akan diisi dengan tugas yang ditambahkan.

Fungsi JavaScript
1. `addTask()`: Fungsi ini dijalankan ketika tombol "Tambah Tugas" diklik.
   - `const taskInput = document.getElementById("taskInput");`: Mengambil nilai dari input tugas.
   - `const taskText = taskInput.value.trim();`: Mengambil teks tugas dan menghapus spasi di awal/akhir.
   - `if (taskText === "") {...}`: Memeriksa apakah input kosong. Jika ya, tampilkan pesan peringatan.
   - `const taskList = document.getElementById("taskList");`: Mengambil elemen daftar tugas untuk menambahkan tugas baru.
   - `const taskItem = document.createElement("li");`: Membuat elemen list baru (`<li>`) untuk tugas.
   - `taskItem.textContent = taskText;`: Menambahkan teks tugas ke elemen list.
   - `const deleteBtn = document.createElement("button");`: Membuat tombol "Hapus" untuk setiap tugas.
     - `deleteBtn.onclick = function() {...}`: Mengatur event untuk menghapus tugas saat tombol "Hapus" diklik.
   - `taskItem.appendChild(deleteBtn);`: Menambahkan tombol hapus ke elemen list.
   - `taskList.appendChild(taskItem);`: Menambahkan elemen list yang berisi tugas ke dalam daftar.
   - `taskInput.value = "";`: Mengosongkan input setelah tugas ditambahkan.

Penataan CSS
- Tata letak dan warna: Menggunakan `flexbox` untuk memastikan aplikasi di tengah halaman dengan latar belakang warna abu-abu muda. Desainnya terlihat bersih dan modern dengan tombol yang berubah warna saat dihover.
- Desain input dan tombol: Input untuk tugas dibuat dengan lebar penuh, serta tombol dengan desain yang menarik dan responsif.

Fungsionalitas
- Pengguna dapat mengetik tugas di input teks, kemudian menambahkannya ke daftar dengan tombol "Tambah Tugas".
- Setiap tugas di daftar dilengkapi dengan tombol "Hapus" untuk menghapusnya dari daftar.
- Desain responsif memastikan aplikasi tampil baik pada berbagai perangka.