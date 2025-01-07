<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <style>
        body {
            font-family: "Inter", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .container {
            width: 90%;
            max-width: 800px;
            padding: 20px;
            border: 2px solid #000;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
        }

        .todo-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        .todo-list-form {
            background-color: #608BC1;
            padding: 20px;
            border-radius: 10px;
            color: black;
        }

        form input[type="text"],
        form input[type="date"],
        form input[type="time"],
        form select {
            font-weight: 500;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #000;
            border-radius: 4px;
            background-color: white;
            outline: none;
        }

        .btn-add,
        .btn-delete {
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            background-color: #003161;
            color: white;
            border: 2px solid black;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .btn-add:hover,
        .btn-delete:hover {
            background-color: #00509d;
        }

        .todo-list {
            margin-top: 10px;
        }

        .todo-item {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: white;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .todo-item input[type="checkbox"] {
            margin-right: 10px;
        }

        .todo-item p {
            margin: 0;
        }

        .todo-item small {
            display: block;
            color: #black;
            font-size: 12px;
        }

        .empty-message {
            text-align: center;
            color: #black;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Form Tambah Tugas -->
        <form method="POST" action="index.php" class="todo-form">
            <h1>Todo List</h1>
            <input type="hidden" name="action" value="add">

            <input type="text" name="title" class="form-input" placeholder="Judul" required>
            <input type="text" name="description" class="form-input" placeholder="Deskripsi" required>
            <input type="date" name="date" class="form-input" required>
            <input type="time" name="time" class="form-input" required>

            <select name="category" class="form-input" required>
                <option value="">Pilih Kategori</option>
                <option value="Pekerjaan">Pekerjaan</option>
                <option value="Pribadi">Pribadi</option>
            </select>

            <select name="priority" class="form-input" required>
                <option value="">Pilih Prioritas</option>
                <option value="Tinggi">Tinggi</option>
                <option value="Sedang">Sedang</option>
                <option value="Rendah">Rendah</option>
            </select>

            <button type="submit" class="btn-add">Tambah</button>
        </form>

        <!-- Daftar Tugas -->
        <form method="POST" action="index.php" class="todo-list-form">
            <h2>Daftar Tugas</h2>
            <input type="hidden" name="action" value="delete_selected">

            <div class="todo-list">
                <?php if (!empty($todos)): ?>
                    <?php foreach ($todos as $todo): ?>
                        <div class="todo-item">
                            <input type="checkbox" name="ids[]" value="<?= htmlspecialchars($todo['id']) ?>">
                            <div class="todo-details">
                                <strong><?= htmlspecialchars($todo['title']) ?></strong> - <?= htmlspecialchars($todo['description']) ?>
                                <small><?= htmlspecialchars($todo['date']) ?> | <?= htmlspecialchars($todo['time']) ?></small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="empty-message">Tidak ada tugas.</p>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn-delete">Hapus Terpilih</button>
        </form>
    </div>

</body>
</html>
