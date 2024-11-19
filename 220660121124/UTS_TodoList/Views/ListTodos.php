<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" type="text/css" href="asset/Style.css">
    <script src="asset/Script.js"></script>
</head>
<body>
    <h1>Todo List</h1>
    <div id="message"></div>
    <form method="POST" action="?action=add">
        <input type="text" name="task" placeholder="Enter new task here...">
        <button type="submit">Add Task</button>
    </form>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <span class="task"><?php echo htmlspecialchars($todo['task']); ?></span>
                <div class="actions">
                    <a href="?action=delete&id=<?php echo $todo['id']; ?>" class="delete">Delete</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
