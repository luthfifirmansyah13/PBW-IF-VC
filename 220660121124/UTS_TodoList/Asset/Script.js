document.addEventListener("DOMContentLoaded", function () {
    // Menampilkan pesan sukses saat task ditambahkan
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('action') && urlParams.get('action') === 'add') {
        const messageContainer = document.getElementById('message');
        if (messageContainer) {
            messageContainer.textContent = "Task successfully added!";
            messageContainer.style.display = "block";
            setTimeout(() => {
                messageContainer.style.display = "none";
            }, 3000); // Pesan hilang otomatis setelah 3 detik
        }
    }

    // Menangani klik tombol hapus
    const deleteLinks = document.querySelectorAll('a[href*="action=delete"]');
    deleteLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah aksi default tautan
            const taskDescription = this.closest('li').querySelector('.task').textContent;
            
            // Konfirmasi custom menggunakan dialog bawaan browser
            const confirmed = confirm(`Are you sure you want to delete this task: "${taskDescription}"?`);
            if (confirmed) {
                // Redirect ke URL untuk menghapus task jika konfirmasi "Yes"
                window.location.href = this.href;
            }
        });
    });
});
