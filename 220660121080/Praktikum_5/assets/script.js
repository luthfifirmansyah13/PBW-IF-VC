document.addEventListener('DOMContentLoaded', () => {
    // Mengambil form dan elemen input
    const form = document.querySelector('form');
    const taskInput = document.querySelector('input[type="text"]');
    const todoList = document.querySelector('ul');

    // Event listener untuk menambah tugas baru
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        // Pastikan input tidak kosong
        if (taskInput.value.trim() !== '') {
            // Submit form
            form.submit();
        } else {
            alert('Tugas tidak boleh kosong!');
        }
    });

    // Event listener untuk tombol "Complete" dan "Delete"
    todoList.addEventListener('click', (e) => {
        if (e.target.classList.contains('complete-btn')) {
            e.target.closest('li').classList.toggle('completed');
        }

        if (e.target.classList.contains('delete-btn')) {
            if (confirm('Yakin ingin menghapus tugas ini?')) {
                // Mengarahkan ke link delete dari PHP
                window.location.href = e.target.dataset.deleteUrl;
            }
        }
    });
});
