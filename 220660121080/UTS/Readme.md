Berikut adalah cara kerja fungsionalitas dari Todo List dengan fitur navbar dan kemampuan untuk menambahkan, menghapus, serta mengedit item Todo.

Cara Kerja Fungsionalitas

1. Input dan Penambahan Item Todo
Input Todo Baru: Pengguna dapat memasukkan teks Todo baru dalam input ber-ID todoInput. Setelah mengetik, pengguna dapat mengklik tombol "Tambah Todo" untuk menambahkan item.
Penambahan ke Daftar: Ketika tombol "Tambah Todo" ditekan, JavaScript akan mengambil teks dari input, membuat elemen <li> baru, lalu menambahkannya ke dalam daftar <ul> dengan ID todoList.
Setiap item yang ditambahkan akan memiliki teks Todo yang ditampilkan bersama dengan dua tombol: "Edit" dan "Hapus".
2. Mengedit Item Todo
Mode Edit: Saat tombol "Edit" ditekan pada item tertentu, JavaScript akan menggantikan teks Todo tersebut dengan input teks yang telah diisi dengan nilai Todo sebelumnya, memungkinkan pengguna untuk mengubah teks Todo.
Simpan Perubahan: Setelah pengguna selesai mengedit, mereka dapat menekan tombol "Simpan" untuk menyimpan perubahan. JavaScript kemudian akan memperbarui teks Todo dengan input yang baru dimasukkan, dan mengembalikan tampilan ke mode normal (tombol "Edit" kembali muncul).
3. Menghapus Item Todo
Menghapus Item: Setiap item Todo juga memiliki tombol "Hapus" yang memungkinkan pengguna menghapus item tersebut dari daftar. Saat tombol "Hapus" ditekan, JavaScript akan menghapus elemen <li> yang sesuai dari <ul>.

Struktur dan Alur Fungsionalitas
Navbar: Menampilkan tautan yang dapat digulir ke bagian terkait di halaman, memberi akses cepat ke berbagai bagian.
Penambahan Todo:
Mengambil teks dari input.
Membuat elemen <li> yang berisi teks Todo dan tombol kontrol ("Edit" dan "Hapus").
Menambahkan elemen baru ke dalam daftar.
Edit Todo:
Mengganti teks Todo dengan input yang dapat diedit saat "Edit" ditekan.
Mengembalikan input ke teks biasa saat "Simpan" ditekan.
Hapus Todo:
Menghapus elemen <li> dari daftar saat "Hapus" ditekan.
Fungsionalitas JavaScript
addTodo: Menambah item Todo baru ke dalam daftar berdasarkan input.
toggleEditMode: Mengaktifkan mode edit untuk item tertentu.
saveEdit: Menyimpan perubahan setelah pengeditan selesai.
deleteTodo: Menghapus item Todo dari daftar.
Ini adalah alur cara kerja untuk aplikasi Todo List yang memungkinkan pengguna untuk menambahkan, mengedit, menghapus item.