Aplikasi Todo List Web

Ini adalah aplikasi Todo List sederhana yang memungkinkan pengguna untuk menambahkan, mengedit, menghapus, dan menandai tugas sebagai selesai. Aplikasi ini menyimpan tugas di `localStorage` browser sehingga daftar tugas tetap ada meskipun halaman di-refresh.

Fitur

- Menambahkan tugas baru: Ketik nama tugas dan tekan Enter atau klik tombol "Tambahkan".
- Mengedit tugas: Anda dapat mengedit tugas yang ada dengan mengklik tombol "Edit".
- Menghapus tugas: Klik tombol "Hapus" untuk menghapus tugas dari daftar.
- Menandai tugas sebagai selesai: Klik checkbox di sebelah tugas untuk menandai tugas sebagai selesai.
- Data yang persisten: Tugas disimpan di `localStorage` browser, sehingga daftar tugas tetap ada meskipun halaman di-refresh.

Demo

[Demo Todo List](icons/Screenshot%202024-11-08%20234026.png)

Instalasi

Untuk memulai proyek ini, Anda membutuhkan file-file berikut:

- `index.html` (struktur HTML)
- `style.css` (CSS untuk styling)
- `app.js` (JavaScript untuk fungsionalitas aplikasi)

1. Clone atau Unduh repositori

Clone repositori ke mesin lokal Anda:

```bash
git https://github.com/satriakamal/PBW-IF-VC.git
```

Atau, Anda bisa mengunduh file ZIP dari GitHub dan mengekstraknya ke folder yang diinginkan.

2. Buka file `index.html`

Setelah mendapatkan file-file tersebut, buka file `index.html` di browser modern apa saja. Aplikasi Todo List akan terbuka dan siap digunakan.

Penggunaan

HTML

Struktur HTML mendefinisikan antarmuka dasar untuk Todo List:

- Input field (`#todo-input`) untuk memasukkan tugas baru.
- Unordered list (`#todo-list`) di mana tugas akan ditambahkan secara dinamis.
- Tombol "Tambahkan" untuk mengirimkan form input.

CSS

CSS digunakan untuk styling aplikasi, dengan desain modern yang mencakup:

- Desain Responsif: Aplikasi menyesuaikan diri untuk tampilan mobile dan desktop.
- Efek Hover: Tugas, tombol, dan checkbox memiliki animasi hover untuk pengalaman pengguna yang lebih baik.
- Tema Terang dan Gelap: Menggunakan variabel CSS, aplikasi memiliki tema gelap dengan kontras tinggi.

JavaScript

Kode JavaScript menangani semua interaktivitas:

- Menambahkan tugas: Tugas ditambahkan ketika pengguna menekan Enter atau mengklik tombol "Tambahkan".
- Mengedit tugas: Pengguna dapat mengedit tugas dengan mengklik tombol "Edit", yang akan memunculkan prompt untuk mengubah teks tugas.
- Menghapus tugas: Tugas dapat dihapus dengan mengklik tombol "Hapus".
- Menandai tugas sebagai selesai: Pengguna dapat menandai tugas sebagai selesai dengan mencentang checkbox, yang akan memberikan garis coret pada teks tugas dan mengubah warnanya.

LocalStorage

Aplikasi ini menyimpan tugas di `localStorage` browser, artinya tugas akan tetap ada meskipun halaman di-refresh atau browser ditutup. Tugas disimpan dalam bentuk array JSON dan diambil saat halaman dimuat.

Struktur File

```
/todo-list
│
├── index.html        # File HTML utama
├── style.css         # File CSS untuk styling aplikasi
├── app.js            # File JavaScript untuk mengatur fungsionalitas todo list
└── README.md         # File dokumentasi ini
```

Teknologi yang Digunakan

- HTML: Untuk struktur halaman.
- CSS: Untuk styling dan desain responsif.
- JavaScript: Untuk fungsionalitas aplikasi dan mengelola `localStorage`.
