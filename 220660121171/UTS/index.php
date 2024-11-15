<?php
include 'db-koneksi.php';

// Fetch todos from the database
$query = "SELECT * FROM todo";
$result = mysqli_query($conn, $query);

// Handle POST request for adding a todo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'delete_selected') {
        // Handle delete selected todos
        $ids = json_decode($_POST['ids']);
        $idsString = implode(',', $ids);
        $deleteQuery = "DELETE FROM todo WHERE id IN ($idsString)";
        mysqli_query($conn, $deleteQuery);
        echo renderTodos($conn); // Update todos list
        exit;
    } else {
        // Handle add todo
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $category = $_POST['category'];
        $priority = $_POST['priority'];

        $insertQuery = "INSERT INTO todo (title, description, date, time, category, priority) 
                        VALUES ('$title', '$description', '$date', '$time', '$category', '$priority')";
        mysqli_query($conn, $insertQuery);
        echo renderTodos($conn); // Update todos list
        exit;
    }
}

// Function to render todos
function renderTodos($conn)
{
    $query = "SELECT * FROM todo";
    $result = mysqli_query($conn, $query);
    ob_start();
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="data-item">
            <input type="checkbox" class="delete-checkbox" value="<?= $row['id']; ?>">
            <strong>Judul:</strong> <?= $row['title']; ?><br>
            <strong>Deskripsi:</strong> <?= $row['description']; ?><br>
            <strong>Tanggal:</strong> <?= $row['date']; ?><br>
            <strong>Waktu:</strong> <?= $row['time']; ?><br>
            <strong>Kategori:</strong> <?= $row['category']; ?><br>
            <strong>Prioritas:</strong> <?= $row['priority']; ?>
        </div>
    <?php }
    return ob_get_clean();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <h1>Tugas</h1>
            <h1>List Tugas</h1>
        </header>

        <!-- Form dan Data -->
        <div class="form-storage-container">
            <!-- Form Tambah Todo -->
            <section class="todo-form">
                <form id="todo-form">
                    <input type="text" id="todo-title" placeholder="Judul todo" required>
                    <input type="text" id="todo-description" placeholder="Deskripsi" required>
                    <input type="date" id="todo-date" required>
                    <input type="time" id="todo-time" required>
                    
                    <select id="todo-category" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Pekerjaan">Pekerjaan</option>
                        <option value="Pribadi">Pribadi</option>
                        <option value="Belanja">Belanja</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>

                    <select id="todo-priority" required>
                        <option value="">Pilih Prioritas</option>
                        <option value="Tinggi">Tinggi</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Rendah">Rendah</option>
                    </select>
                </form>
            </section>

            <!-- Data Storage -->
            <section class="data-storage">
                <h2>Data Tersimpan</h2>
                <div id="saved-data">
                    <?= renderTodos($conn); ?>
                </div>
            </section>
        </div>

        <div class="buttonForm">
            <!-- Tombol Tambah -->
            <button id="add-todo">Tambah</button>
            <button id="delete-selected">Hapus Terpilih</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
