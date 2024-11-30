<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focus List</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Pastikan file CSS dirujuk dengan benar -->
</head>
<body>
    <div class="container">
        <!-- Notifikasi -->
        <div id="notification" style="display: none; padding: 10px; color: #fff; background-color: #0dfd00c4; margin-bottom: 10px; border-radius: 4px;">
            <span id="notificationMessage"></span>
        </div>

        <!-- Logo dan Judul -->
        <div class="title-container">
            <img src="assets/img/logo.png" alt="Logo" class="logo">
            <h1>Focus List</h1>
        </div>

        <!-- Form Tambah Tugas -->
        <form action="index.php?action=add" method="POST" class="add-task">
            <input type="text" name="task" placeholder="Tugas baru" required class="task-input">
            <button type="submit" class="submit-button">Tambah</button>
        </form>

        <!-- Daftar Tugas -->
        <h2>Daftar Tugas</h2>
        <ul>
    <?php foreach ($todos as $todo): ?>
        <li class="<?= $todo['is_completed'] ? 'completed' : ''; ?>">
            <span class="task-text"><?= htmlspecialchars($todo['task']) ?></span>

            <!-- Form Edit -->
            <form action="index.php?action=edit&id=<?= $todo['id'] ?>" method="POST" style="display: flex; align-items: center;">
                <input type="text" name="task" value="<?= htmlspecialchars($todo['task']) ?>" required class="edit-input">
                <button type="submit" class="update-button">Update</button>
            </form>

            <!-- Tombol Tandai Selesai -->
            <form action="index.php?action=complete&id=<?= $todo['id'] ?>" method="POST" style="display: inline;">
                <button type="submit" class="complete-button" <?= $todo['is_completed'] ? 'disabled' : ''; ?>>Selesai</button>
            </form>

            <!-- Tombol Hapus -->
            <form action="index.php?action=delete&id=<?= $todo['id'] ?>" method="POST" style="display: inline;">
                <button type="submit" class="delete-button">Hapus</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>


        <!-- Footer -->
        <div class="footer">
            <p><center>&copy; 2024 Usep Suherman</center></p>
            <p><center>Fakultas Teknologi Informasi - UNSAP</center></p>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
