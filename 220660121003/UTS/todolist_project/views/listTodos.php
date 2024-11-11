<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <script src="assets/script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <div class="todo-container">
            <ul class="todo-list">
                <?php foreach ($todos as $todo): ?>
                    <li class="todo-item <?php echo $todo['is_completed'] ? 'completed' : ''; ?>">
                        <span><?php echo htmlspecialchars($todo['task']); ?></span>
                        <div class="todo-actions">
                            <?php if (!$todo['is_completed']): ?>
                                <a class="complete-btn" href="?action=complete&id=<?php echo $todo['id']; ?>">✔️</a>
                            <?php endif; ?>
                            <a class="delete-btn" href="?action=delete&id=<?php echo $todo['id']; ?>">🗑️</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <form class="todo-form" method="POST" action="?action=add">
            <input type="text" name="task" placeholder="New Task" required>
            <button type="submit">Add Task</button>
        </form>
    </div>
</body>
</html>
