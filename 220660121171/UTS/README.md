1.Pendeklrasian variable mengambil elemen-elemen input dari DOM berdasarkan ID masing-masing. Elemen-elemen ini termasuk:
    titleInput: Input judul todo
    descriptionInput: Input deskripsi todo
    dateInput: Input tanggal todo
    timeInput: Input waktu todo
    categoryInput: Dropdown pilihan kategori todo
    priorityInput: Dropdown pilihan prioritas todo
    addButton: Tombol "Tambah" untuk menambahkan todo ke daftar
    savedDataContainer: Kontainer untuk menampilkan data todo yang disimpan
    deleteSelectedButton: Tombol "Hapus Terpilih" untuk menghapus item yang dipilih

2.Kemudian kode untuk tombol 
    addButton akan menjalankan fungsi addTodo saat diklik.
    deleteSelectedButton akan menjalankan fungsi deleteSelectedItems saat diklik.

3.Fungsi atau method dari addTodo()
    Mengambil nilai dari setiap input form kemudian melakukan validasi agar semua kolom terisi dengan kondisi Jika ada kolom yang kosong, menampilkan pesan peringatan dan menghentikan eksekusi dan Jika validasi terpenuhi, membuat objek todoData yang menyimpan data todo serta memanggil fungsi saveData untuk menyimpan dan menampilkan data todo pada halaman. Membersihkan form input setelah data ditambahkan.

4. Fungsi saveData()
    Membuat elemen <div> baru untuk setiap item todo yang disebut dataItem kemudian enambahkan elemen-elemen titleElement, descriptionElement, dateTimeElement, categoryElement, dan priorityElement untuk menampilkan detail todo (judul, deskripsi, tanggal, waktu, kategori, dan prioritas) serta menambahkan checkbox untuk setiap item (deleteCheckbox) yang dapat digunakan untuk menandai todo yang akan dihapus.

5. Fungsi deletedSelectedItems()
    Mengambil semua checkbox dengan class delete-checkbox dan menggunakan forEach untuk memeriksa setiap checkbox apakah dalam kondisi "checked" (tercentang) dan Jika checkbox tercentang, elemen induknya (dataItem) akan dihapus dari DOM.