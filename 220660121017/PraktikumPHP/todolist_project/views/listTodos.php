<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div class="container">
        <h1>My Todo List</h1>
        
        <ul class="todo-list">
            <?php $count = 1; // Mulai dari 1 ?>
            <?php foreach ($todos as $todo): ?>
                <li class="<?= $todo['is_completed'] ? 'completed' : '' ?>">
                    <!-- Tampilkan nomor dan deskripsi task -->
                    <span class="task-number"><?= $count; ?>.</span>
                    <span class="task-text"><?= htmlspecialchars($todo['task']); ?></span>
                    <div class="actions">
                        <?php if (!$todo['is_completed']): ?>
                            <a href="?action=complete&id=<?= $todo['id']; ?>" class="complete-btn">Mark as completed</a>
                        <?php endif; ?>
                        <a href="?action=delete&id=<?= $todo['id']; ?>" class="delete-btn">Delete</a>
                    </div>
                </li>
                <?php $count++; // Increment counter ?>
            <?php endforeach; ?>
        </ul>

        <form method="POST" action="?action=add" class="add-form">
            <input type="text" name="task" placeholder="New Task" required>
            <button type="submit" class="add-btn">Add</button>
        </form>
    </div>
</body>
</html>
