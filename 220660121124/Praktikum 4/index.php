<!DOCTYPE html>
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
        <img src="1111.jpg" alt="Foto Profil"> <!-- Ganti dengan path foto Anda -->
    </div>
    <h2 class="text-center">Tentang Saya</h2>
        <p class="text-center">Selamat datang di portofolio saya! Saya Mahasiswa semester 5 Fakultas Teknologi Informasi</p>
        <blockquote class="text-center">"Mendaki gunung dapat menghilangkan stress."
        </blockquote>

        <h2 class="text-center">Pengalaman</h2>
    <blockquote>
    <p class="text-center">Saya memiliki pengalaman dalam mendaki gunung.</</p>
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
            ["Nama" => "Kamal Nurfalah", "Universitas" => "Universitas Sebelas April", "Tahun" => "2022-2026"],
        ];

        foreach ($projects as $project) {
            echo "<tr><td>{$project['Nama']}</td><td>{$project['Universitas']}</td><td>{$project['Tahun']}</td></tr>";
        }
        ?>
    </table>

    <h2 class="text-center">Hobi</h2>
    <div class="hobi">
        <ul>
            <li>Mendaki</li>
            <li>Berenang</li>
            <li>Melukis</li>
        </ul>
        <ol>
                <li>Game</li>
                <li>Editing Video</li>
                <li>Desain</li>
            </ol>
    </div>

    <h2 class="text-center">Musik</h2>
    <audio controls>
        <source src="WhatsApp Audio 2024-11-05 at 12.09.11_123fd4b8.mp3" type="audio/mp3"> <!-- Ganti dengan path musik Anda -->
        Browser Anda tidak mendukung elemen audio.
    </audio>

    <h2 class="text-center">Video</h2>
    <iframe width="560" height="315" src="https://youtu.be/SeBMUyUF4vM?feature=shared" title="YouTube video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <footer>
    <!-- Link ke Media Sosial -->
    <h2 class="text-center">Ikuti Saya</h2>
    <p class="text-center">
        <a href="https://www.instagram.com/kmalnf_?igsh=MWxrcHdzZ2tmeGoyeg==" target="_blank">
            <i class="bi bi-instagram"></i>
            Instagram</a> |
        <a href="https://www.tiktok.com/@loldump9?_t=8r8Ea4UpLnO&_r=1" target="_blank">
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
