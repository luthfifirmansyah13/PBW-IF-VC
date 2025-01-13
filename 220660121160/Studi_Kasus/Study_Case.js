// Tunggu hingga dokumen sepenuhnya dimuat
document.addEventListener('DOMContentLoaded', function() {
    // Animasi smooth scroll untuk navigasi
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Animasi fade-in untuk elemen saat di-scroll
    function fadeInOnScroll() {
        const elements = document.querySelectorAll('.container > *');
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            const isVisible = (elementTop >= 0) && (elementBottom <= window.innerHeight);
            
            if (isVisible && !element.classList.contains('visible')) {
                element.classList.add('visible');
            }
        });
    }

    // Tambahkan class untuk animasi pada scroll
    window.addEventListener('scroll', fadeInOnScroll);
    fadeInOnScroll(); // Panggil sekali saat halaman dimuat

    // Animasi typing effect untuk judul
    function typeWriter(element, text, speed = 100) {
        let i = 0;
        element.innerHTML = '';
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        type();
    }

    // Aplikasikan efek typing pada judul
    const title = document.querySelector('h1');
    const originalText = title.textContent;
    typeWriter(title, originalText);

    // Tambahkan efek hover pada gambar profile
    const profileImage = document.querySelector('.text-center img');
    if (profileImage) {
        profileImage.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05) rotate(2deg)';
        });

        profileImage.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    }

    // Animasi progress bar untuk skills (jika ada)
    function animateProgressBars() {
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            const target = bar.getAttribute('data-target');
            let width = 0;
            const interval = setInterval(() => {
                if (width >= target) {
                    clearInterval(interval);
                } else {
                    width++;
                    bar.style.width = width + '%';
                    bar.textContent = width + '%';
                }
            }, 10);
        });
    }

    // Tambahkan efek parallax pada background
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        document.body.style.backgroundPositionY = -(scrolled * 0.2) + 'px';
    });

    // Tambahkan efek highlight pada teks yang di-hover
    document.querySelectorAll('p, li').forEach(element => {
        element.addEventListener('mouseover', function() {
            this.style.color = '#74b9ff';
            this.style.transition = 'color 0.3s ease';
        });

        element.addEventListener('mouseout', function() {
            this.style.color = '';
        });
    });

    // Tambahkan loading animation
    window.addEventListener('load', function() {
        const loader = document.createElement('div');
        loader.className = 'loader';
        document.body.appendChild(loader);

        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.remove();
            }, 500);
        }, 1000);
    });

    // Form validation (jika ada form kontak)
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Validasi email
            const email = form.querySelector('input[type="email"]');
            if (email && !validateEmail(email.value)) {
                showError(email, 'Please enter a valid email address');
                return;
            }
            // Tampilkan success message
            showSuccess('Message sent successfully!');
        });
    }

    // Fungsi helper untuk validasi email
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Fungsi untuk menampilkan pesan error
    function showError(element, message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.textContent = message;
        element.parentNode.appendChild(errorDiv);
        setTimeout(() => errorDiv.remove(), 3000);
    }

    // Fungsi untuk menampilkan pesan sukses
    function showSuccess(message) {
        const successDiv = document.createElement('div');
        successDiv.className = 'success-message';
        successDiv.textContent = message;
        document.body.appendChild(successDiv);
        setTimeout(() => successDiv.remove(), 3000);
    }

    // Tambahkan dark mode toggle
    const darkModeToggle = document.createElement('button');
    darkModeToggle.innerHTML = '🌙';
    darkModeToggle.className = 'dark-mode-toggle';
    document.body.appendChild(darkModeToggle);

    darkModeToggle.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        darkModeToggle.innerHTML = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
    });
});

// Tambahkan styles untuk animasi dan komponen baru
const styles = `
    .visible {
        opacity: 1;
        transform: translateY(0);
    }

    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        transition: opacity 0.5s;
    }

    .loader::after {
        content: '';
        width: 50px;
        height: 50px;
        border: 5px solid #f3f3f3;
        border-top: 5px solid #74b9ff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .error-message {
        color: #ff4757;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        background: #ffe0e3;
    }

    .success-message {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #2ecc71;
        color: white;
        padding: 15px 25px;
        border-radius: 5px;
        animation: slideIn 0.5s ease;
    }

    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .dark-mode-toggle {
        position: fixed;
        bottom: 20px;
        left: 20px;
        padding: 10px;
        border: none;
        border-radius: 50%;
        background: #f8fafc;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        z-index: 100;
    }

    .dark-mode-toggle:hover {
        transform: scale(1.1);
    }

    .dark-mode {
        background: linear-gradient(135deg, #2d3436, #2c3e50);
        color: #f8fafc;
    }

    .dark-mode .container {
        background: rgba(0, 0, 0, 0.2);
    }

    .dark-mode h1,
    .dark-mode h2 {
        color: #f8fafc;
    }

    .dark-mode p,
    .dark-mode li {
        color: #dfe6e9;
    }

    .dark-mode blockquote {
        background: rgba(0, 0, 0, 0.2);
        color: #f8fafc;
    }

    .dark-mode .social-links a {
        background: rgba(0, 0, 0, 0.2);
        color: #f8fafc;
    }

    .dark-mode .social-links a:hover {
        background: #74b9ff;
    }
`;

// Tambahkan styles ke head
const styleSheet = document.createElement('style');
styleSheet.textContent = styles;
document.head.appendChild(styleSheet);