<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>TodoList</h1>
        <form cl ass="todo-form" action="index.php?action=add" method="POST">
            <input type="text" id="task" name="task" placeholder="Masukkan tugas baru" required>
            <button type="submit">Tambah</button>
        </form>
        <ul class="todo-list">
            <?php foreach ($todos as $todo): ?>
                <li class="todo-item <?= $todo['is_completed'] ? 'completed' : '' ?>">
                    <?= htmlspecialchars($todo['task']) ?>
                    <a href="index.php?action=complete&id=<?= $todo['id'] ?>">Selesai</a>
                    <a href="index.php?action=delete&id=<?= $todo['id'] ?>">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="footer">
            <p>&copy; 2024 Agin Gustiana - Universitas Sebelas April</p>
        </div>
    </div>
</body>
</html>