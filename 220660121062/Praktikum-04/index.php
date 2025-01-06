<<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="style.css"> <!-- Sambungkan ke CSS -->
</head>
<body>

<div class="container">
    <div class="text-center">
        <h1>Portofolio Saya</h1>
        <img src="WhatsApp Image 2024-11-14 at 18.44.42 (1).jpeg" alt="Foto Profil"> <!-- Ganti dengan path foto Anda -->
    </div>
    <h2 class="text-center">Tentang Saya</h2>
        <p class="text-center">Selamat datang di portofolio saya! Saya Mahasiswa semester 5 Fakultas Teknologi Informasi</p>
        <blockquote class="text-center">"Jangan lupa dengan secangkir kopi hitam."
        </blockquote>

        <h2 class="text-center">Pengalaman</h2>
    <blockquote>
    <p class="text-center">Saya memiliki pengalaman dalam bermain voli.</</p>
    </blockquote>

    <h2 class="text-center">Status</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Universitas</th>
            <th>Tahun</th>
        </tr>
        <?php
        // Contoh data proyek (dapat diganti dengan data dinamis dari database)
        $projects = [
            ["Nama" => "Agin Gustiana", "Universitas" => "Universitas Sebelas April", "Tahun" => "2022-2026"],
        ];

        foreach ($projects as $project) {
            echo "<tr><td>{$project['Nama']}</td><td>{$project['Universitas']}</td><td>{$project['Tahun']}</td></tr>";
        }
        ?>
    </table>

    <h2 class="text-center">Hobi</h2>
    <div class="hobi">
        <ul>
            <li>Voli</li>
            <li>Berenang</li>
            <li>Menggambar</li>
        </ul>
        <ol>
                <li>Game</li>
                <li>Editing Video</li>
                <li>Desain</li>
            </ol>
    </div>

    <h2 class="text-center">Musik</h2>
    <audio controls>
        <source src="WhatsApp Audio 2024-11-14 at 19.26.48.mpeg" type="audio/mp3"> <!-- Ganti dengan path musik anda -->
        Browser Anda tidak mendukung elemen audio.
    </audio>

    <h2 class="text-center">Video</h2>
    <iframe width="560" height="315" src="https://vt.tiktok.com/ZSj5crRQA/" title="YouTube video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <footer>
    <!-- Link ke Media Sosial -->
    <h2 class="text-center">Ikuti Saya</h2>
    <p class="text-center">
        <a href="https://www.instagram.com/agngstna_/profilecard/?igsh=cnJyazA2NHpxbGxl" target="_blank">
            <i class="bi bi-instagram"></i>
            Instagram</a> |
        <a href="https://www.tiktok.com/@angesajaa?_t=8rT6ihogLDU&_r=1" target="_blank">
            <i class="bi bi-Tiktok"></i>
            Tiktok</a>
    </p>
    <br><br>
    &copy; 2024 Portofolio Pribadi. Semua hak dilindungi.
</footer>
</div>

<script src="script.js"></script> <!-- Sambungkan ke JavaScript -->
</body>
</html>