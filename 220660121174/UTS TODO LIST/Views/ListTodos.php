<!-- views/todo_list.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="Asset/style.css">
</head>
<body>
    <h1>Todo List</h1>

    <!-- Form untuk menambahkan todo baru -->
    <form method="POST" action="index.php?action=add">
        <input type="text" name="task" placeholder="New Task" required>
        <button type="submit">Add</button>
    </form>

    <!-- Menampilkan daftar todos -->
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?php echo htmlspecialchars($todo['task']); ?>
                <a href="index.php?action=delete&id=<?php echo $todo['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
