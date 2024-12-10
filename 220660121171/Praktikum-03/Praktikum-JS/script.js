// JavaScript untuk animasi judul halaman
window.onload = function() {
    const title = document.querySelector('.text-center');
    title.classList.add('fade-in');
}

// Fungsi untuk mengganti bahasa konten (misalnya bahasa Indonesia ke Inggris)
function toggleLanguage(language) {
    const aboutText = document.getElementById('about-text');
    const jobText = document.getElementById('job-text');
    const hobbiesText = document.getElementById('hobbies-text');
    
    if (language === 'en') {
        aboutText.innerHTML = "Welcome to my portfolio! I am a Computer Science student currently studying at Sebelas April University, Sumedang.";
        jobText.innerHTML = "Work Experience";
        hobbiesText.innerHTML = "My Hobbies";
        document.querySelector('.titleHobi').innerHTML = "My Hobbies";
    } else {
        aboutText.innerHTML = "Selamat datang di portofolio saya! Saya adalah seorang Mahasiswa Informatika yang sedang menempuh pendidikan di Universitas Sebelas April Sumedang.";
        jobText.innerHTML = "Pengalaman Kerja";
        hobbiesText.innerHTML = "Hobi Saya";
        document.querySelector('.titleHobi').innerHTML = "Hobi Saya";
    }
}

// Fungsi untuk memutar audio dan video otomatis saat halaman dimuat
function playMedia() {
    const audio = document.querySelector('audio');
    const video = document.querySelector('iframe');
    audio.play(); // Memulai audio
    video.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*'); // Memutar video
}

window.onload = function() {
    playMedia(); // Memutar media saat halaman dimuat
}