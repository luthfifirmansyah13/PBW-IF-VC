<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
    <div class="container">
        <!-- Kolom Form Input Todo -->
        <div class="todo-form-container">
            <h2>Add a New Task</h2>
            <form method="POST" action="?action=add">
                <input type="text" name="task" placeholder="New Task" class="todo-input" required>
                <button type="submit" class="add-btn">Add</button>
            </form>
        </div>

        <!-- Kolom Daftar Todo -->
        <div class="todo-list-container">
            <h2>Todo List</h2>
            <ul class="todo-list">
                <?php foreach ($todos as $todo): ?>
                    <li class="todo-item">
                        <?php echo htmlspecialchars($todo['task']); ?>
                        <a href="?action=delete&id=<?php echo $todo['id']; ?>" class="delete-btn">Delete</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>
