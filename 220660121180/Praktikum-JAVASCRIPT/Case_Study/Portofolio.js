// Data proyek yang akan ditampilkan
const projects = [
    {
        title: "Website Portfolio",
        description: "Website portofolio interaktif menggunakan HTML, CSS, dan JavaScript."
    },
    {
        title: "Aplikasi To-Do List",
        description: "Aplikasi sederhana untuk mencatat tugas harian, menggunakan JavaScript untuk fungsi CRUD."
    },
    {
        title: "Login Page",
        description: "Membuat Login page untuk jaringan wifi mikrotik."
    }
];

// Data pengalaman kerja yang akan ditampilkan
const experiences = [
    {
        position: "Kelompok Penyelenggara Pemungutan Suara (KPPS)",
        company: "Komisi Pemilihan Umum (KPU)",
        year: "Januari - Februari 2024",
        description: "Bertanggung jawab dalam pengorganisasian pemungutan suara pada hari pemilihan dan penggunaan sirekap."
    },
];

// Fungsi untuk menampilkan daftar proyek
function displayProjects() {
    const projectContainer = document.getElementById('project-container');
    projects.forEach(project => {
        // Membuat elemen untuk setiap proyek
        const projectItem = document.createElement('div');
        projectItem.classList.add('project-item');
        
        const title = document.createElement('h3');
        title.textContent = project.title;
        
        const description = document.createElement('p');
        description.textContent = project.description;
        
        projectItem.appendChild(title);
        projectItem.appendChild(description);
        projectContainer.appendChild(projectItem);
    });
}

// Fungsi untuk menampilkan pengalaman kerja
function displayExperience() {
    const experienceContainer = document.getElementById('experience-container');
    experiences.forEach(experience => {
        // Membuat elemen untuk setiap pengalaman kerja
        const experienceItem = document.createElement('div');
        experienceItem.classList.add('experience-item');
        
        const position = document.createElement('h3');
        position.textContent = `${experience.position} - ${experience.company}`;
        
        const year = document.createElement('span');
        year.textContent = experience.year;
        year.classList.add('year');

        const description = document.createElement('p');
        description.textContent = experience.description;
        
        experienceItem.appendChild(position);
        experienceItem.appendChild(year);
        experienceItem.appendChild(description);
        experienceContainer.appendChild(experienceItem);
    });
}

// Menampilkan warna latar belakang acak dan pesan selamat datang saat halaman dimuat
window.onload = function() {
    changeBackgroundColor();
    showWelcomeMessage();
    displayProjects();    // Menampilkan daftar proyek
    displayExperience();  // Menampilkan daftar pengalaman
};
