// Fungsi untuk menghasilkan warna acak
function generateRandomColor() {
    var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
    return randomColor;
}

// Mengubah warna latar belakang halaman secara acak
function changeBackgroundColor() {
    document.body.style.backgroundColor = generateRandomColor();
}

// Menampilkan pesan sambutan
function showWelcomeMessage() {
    alert("Selamat datang di portofolio saya");
}

// Fungsi untuk menampilkan proyek
function displayProjects() {
    // Implementasi untuk menampilkan proyek
}

// Fungsi untuk menampilkan pengalaman
function displayExperience() {
    // Implementasi untuk menampilkan pengalaman
}

// Memanggil semua fungsi saat halaman dimuat
window.onload = function() {
    changeBackgroundColor();
    showWelcomeMessage(); // Panggil fungsi pesan sambutan
    displayProjects();     // Panggil fungsi untuk menampilkan proyek
    displayExperience();   // Panggil fungsi untuk menampilkan pengalaman
};