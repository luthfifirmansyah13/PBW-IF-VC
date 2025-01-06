<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h2><img src="assets/images/logo.png" alt="Logo" class="logo"> Todo List</h2>
        </header>

        <!-- Notifikasi di atas Todo List -->
        <div id="notification" class="notification" style="display: none;">
            <span id="notificationMessage"></span>
        </div>

        <!-- Form Tambah Tugas -->
        <form action="index.php?action=add" method="POST" class="add-task">
            <input type="text" name="task" placeholder="Tugas baru" required class="task-input">
            <button type="submit" class="submit-button">Tambah</button>
        </form>

        <!-- Daftar Tugas -->
        <h3>Daftar Tugas</h3>
        <ul>
            <?php foreach ($todos as $todo): ?>
                <li class="task-item" style="<?= $todo['is_completed'] ? 'text-decoration: line-through; color: gray;' : ''; ?>">
                    <span class="task-text"><?= htmlspecialchars($todo['task']) ?></span>

                    <!-- Form Edit -->
                    <form action="index.php?action=edit&id=<?= $todo['id'] ?>" method="POST" class="inline-form">
                        <input type="text" name="task" value="<?= htmlspecialchars($todo['task']) ?>" required class="edit-input">
                        <button type="submit" class="update-button">Update</button>
                    </form>

                    <!-- Tombol Tandai Selesai -->
                    <form action="index.php?action=complete&id=<?= $todo['id'] ?>" method="POST" class="inline-form">
                        <button type="submit" class="complete-button" <?= $todo['is_completed'] ? 'disabled' : ''; ?>>Selesai</button>
                    </form>

                    <!-- Tombol Hapus -->
                    <form action="index.php?action=delete&id=<?= $todo['id'] ?>" method="POST" class="inline-form">
                        <button type="submit" class="delete-button">Hapus</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>

        <footer>
            <p>&copy; 2024 Muhamad Deni Ramdani - Universitas Sebelas April</p>
        </footer>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
