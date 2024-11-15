// Pastikan DOM sudah dimuat sebelum menjalankan script
document.addEventListener("DOMContentLoaded", function () {
    const addTodoButton = document.getElementById('add-todo');
    const deleteSelectedButton = document.getElementById('delete-selected');
    const savedDataContainer = document.getElementById('saved-data');

    // Event Listener untuk tombol Tambah
    addTodoButton.addEventListener('click', function () {
        const title = document.getElementById('todo-title').value.trim();
        const description = document.getElementById('todo-description').value.trim();
        const date = document.getElementById('todo-date').value;
        const time = document.getElementById('todo-time').value;
        const category = document.getElementById('todo-category').value;
        const priority = document.getElementById('todo-priority').value;

        // Validasi input
        if (!title || !description || !date || !time || !category || !priority) {
            alert("Semua field harus diisi!");
            return;
        }

        // Kirim data ke server untuk disimpan
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Perbarui daftar data
                savedDataContainer.innerHTML = xhr.responseText;

                // Kosongkan form setelah berhasil ditambah
                document.getElementById('todo-title').value = '';
                document.getElementById('todo-description').value = '';
                document.getElementById('todo-date').value = '';
                document.getElementById('todo-time').value = '';
                document.getElementById('todo-category').value = '';
                document.getElementById('todo-priority').value = '';
            }
        };

        const data = `title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}&date=${encodeURIComponent(date)}&time=${encodeURIComponent(time)}&category=${encodeURIComponent(category)}&priority=${encodeURIComponent(priority)}`;
        xhr.send(data);
    });

    // Event Listener untuk tombol Hapus Terpilih
    deleteSelectedButton.addEventListener('click', function () {
        const selectedCheckboxes = document.querySelectorAll('.delete-checkbox:checked');
        if (selectedCheckboxes.length === 0) {
            alert("Tidak ada item yang dipilih untuk dihapus.");
            return;
        }

        // Konfirmasi penghapusan
        if (!confirm("Apakah Anda yakin ingin menghapus item yang dipilih?")) return;

        // Ambil ID dari checkbox yang dipilih
        const idsToDelete = Array.from(selectedCheckboxes).map(checkbox => checkbox.value);

        // Kirim permintaan penghapusan menggunakan AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Perbarui daftar data setelah penghapusan
                savedDataContainer.innerHTML = xhr.responseText;
            }
        };

        const data = `ids=${encodeURIComponent(JSON.stringify(idsToDelete))}&action=delete_selected`;
        xhr.send(data);
    });
});
