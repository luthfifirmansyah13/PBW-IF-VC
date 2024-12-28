// Tambahkan efek interaktif saat halaman digulir
document.addEventListener("scroll", function() {
    const header = document.querySelector("h1");
    const scrollPosition = window.scrollY;

    if (scrollPosition > 50) {
        header.style.color = "#3498db";
    } else {
        header.style.color = "#2c3e50";
    }
});

// Smooth scroll saat klik navigasi
const links = document.querySelectorAll("a");

for (const link of links) {
    link.addEventListener("click", function(event) {
        if (link.getAttribute("href").charAt(0) === "#") {
            event.preventDefault();
            const section = document.querySelector(link.getAttribute("href"));
            section.scrollIntoView({ behavior: "smooth" });
        }
    });
}

// Animasi hover pada link sosial media
const socialLinks = document.querySelectorAll(".social-links a");

socialLinks.forEach(link => {
    link.addEventListener("mouseover", () => {
        link.style.transform = "scale(1.2)";
    });

    link.addEventListener("mouseout", () => {
        link.style.transform = "scale(1)";
    });
});

// Popup untuk gambar profil
const profileImage = document.querySelector("img");
profileImage.addEventListener("click", () => {
    alert("Ini adalah gambar profil Anda!");
});

const carousel = document.querySelector(".hobi-carousel");
const nextButton = document.getElementById("next");
const prevButton = document.getElementById("prev");
const cardWidth = document.querySelector(".hobi-card").offsetWidth + 20; // width + gap

nextButton.addEventListener("click", () => {
    carousel.scrollBy({ left: cardWidth, behavior: "smooth" });
});

prevButton.addEventListener("click", () => {
    carousel.scrollBy({ left: -cardWidth, behavior: "smooth" });
});

// Inisialisasi variabel video
const video = document.getElementById("video");
const playIcon = document.getElementById("play-icon");
const pauseIcon = document.getElementById("pause-icon");

// Fungsi toggle play/pause
function toggleVideo() {
    const player = new YT.Player('video', {
        events: {
            'onReady': function (event) {
                if (video.dataset.playing === "true") {
                    event.target.pauseVideo();
                    video.dataset.playing = "false";
                    playIcon.style.display = "inline";
                    pauseIcon.style.display = "none";
                } else {
                    event.target.playVideo();
                    video.dataset.playing = "true";
                    playIcon.style.display = "none";
                    pauseIcon.style.display = "inline";
                }
            }
        }
    });
}

// Ambil elemen modal dan gambar di dalam galeri
const modal = document.createElement('div');
modal.classList.add('modal');
document.body.appendChild(modal);

const modalImg = document.createElement('img');
modal.appendChild(modalImg);

// Ambil semua elemen gambar dalam galeri
const galleryImages = document.querySelectorAll('.gallery-image');

// Tambahkan event listener untuk setiap gambar
galleryImages.forEach(img => {
    img.addEventListener('click', () => {
        // Tampilkan modal dan gambar yang diklik
        modalImg.src = img.src;
        modal.classList.add('active');
    });
});

// Tambahkan event listener untuk menutup modal
modal.addEventListener('click', () => {
    modal.classList.remove('active');
});

