<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <!--
        style.CSS
        Berfungsi untuk membuat tampilan lebih menarik
    -->
    <link rel="stylesheet" type="text/css" href="asset/Style.css">
    <!--
        script.js
        Berfungsi untuk mengirimkan data ke server
        serta menampilkan alert jika data berhasil di input
    -->
    <script src="asset/Script.js"></script>
</head>
<body>
    <h1>Todo List</h1>
    <form method="POST" action="?action=add">
        <input type="text" name="task" placeholder="New Task">
        <button type="submit">Add</button>
    </form>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?php
                    // Tampilkan deskripsi Todo
                    echo $todo['task'];

                    // Tampilkan link untuk menghapus Todo
                    echo ' ';
                    echo '<a href="?action=delete&id=' . $todo['id'] . '">Delete</a>';
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
