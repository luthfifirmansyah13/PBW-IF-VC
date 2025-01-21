document.addEventListener("DOMContentLoaded", function () {
    const themeButton = document.getElementById("theme-button");
    const body = document.body;

    themeButton.addEventListener("click", function () {
        body.classList.toggle("dark-theme");
        if (body.classList.contains("dark-theme")) {
            themeButton.textContent = "Light Mode";
        } else {
            themeButton.textContent = "Dark Mode";
        }
    });

    // Menampilkan waktu saat ini
    const timeElement = document.getElementById("current-time");
    setInterval(() => {
        const now = new Date();
        timeElement.textContent = `Waktu saat ini: ${now.toLocaleTimeString()}`;
    }, 1000);
});
