document.addEventListener('DOMContentLoaded', () => {
    // Menambahkan efek animasi ketika checkbox diklik
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', (event) => {
            const listItem = event.target.closest('li');
            if (event.target.checked) {
                listItem.classList.add('completed');
            } else {
                listItem.classList.remove('completed');
            }
        });
    });

    // Konfirmasi penghapusan tugas
    document.querySelectorAll('a').forEach(deleteLink => {
        deleteLink.addEventListener('click', (event) => {
            if (!confirm('Apakah Anda yakin ingin menghapus tugas ini?')) {
                event.preventDefault();
            }
        });
    });
});
