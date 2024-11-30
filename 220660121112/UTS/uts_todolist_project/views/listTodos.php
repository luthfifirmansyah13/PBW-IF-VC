<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Monoton&family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="todo-container">
        <h1>To-Do List</h1>
        
        <!-- Input form for new tasks -->
        <div class="todo-input">
            <input type="text" id="taskInput" placeholder="Tambah tugas baru...">
            <input type="date" id="dateInput">
            <button onclick="addTask()">Tambah</button>
        </div>
        
        <!-- Task list -->
        <ul id="todoList"></ul>
    </div>
    
    <script src="assets/js/script.js"></script>
</body>
</html>

