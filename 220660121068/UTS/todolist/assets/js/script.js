const urlParams = new URLSearchParams(window.location.search);
const status = urlParams.get('status');

if (status) {
    const notification = document.getElementById('notification');
    const notificationMessage = document.getElementById('notificationMessage');
    const notificationIcon = document.getElementById('notificationIcon');

    switch (status) {
        case 'add_success':
            notificationMessage.textContent = "Tugas berhasil ditambahkan!";
            notificationIcon.className = "fa fa-check-circle";  // Centang untuk selesai
            notification.style.backgroundColor = "rgba(40, 167, 69, 0.7)"; // Hijau
            break;
        case 'complete_success':
            notificationMessage.textContent = "Tugas berhasil diselesaikan!";
            notificationIcon.className = "fa fa-check-circle";  // Centang untuk selesai
            notification.style.backgroundColor = "rgba(40, 167, 69, 0.7)"; // Hijau
            break;
        case 'delete_success':
            notificationMessage.textContent = "Tugas berhasil dihapus!";
            notificationIcon.className = "fa fa-trash-alt";  // Ikon sampah untuk hapus
            notification.style.backgroundColor = "rgba(220, 53, 69, 0.7)"; // Merah
            break;
        case 'edit_success':
            notificationMessage.textContent = "Tugas berhasil diubah!";
            notificationIcon.className = "fa fa-pencil-alt";  // Pulpen untuk update
            notification.style.backgroundColor = "rgba(255, 193, 7, 0.7)"; // Kuning
            break;
    }

    // Tampilkan notifikasi
    notification.style.display = 'flex';

    // Sembunyikan notifikasi setelah 3 detik
    setTimeout(() => {
        notification.style.display = 'none';
        // Hapus parameter status dari URL
        history.replaceState(null, null, window.location.pathname);
    }, 3000);
}
