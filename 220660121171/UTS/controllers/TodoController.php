<?php
class TodoController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo; // Koneksi ke database
    }

    // Menangani request dari form
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['action']) && $_POST['action'] == 'add') {
                $this->addTodo();
            } elseif (isset($_POST['action']) && $_POST['action'] == 'delete_selected') {
                $this->deleteSelectedTodos();
            }
        }

        // Tampilkan halaman daftar tugas
        $this->showTodoList();
    }

    // Fungsi untuk menambahkan tugas baru
    private function addTodo() {
        if (
            isset($_POST['title'], $_POST['description'], $_POST['date'], 
                  $_POST['time'], $_POST['category'], $_POST['priority'])
        ) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $category = $_POST['category'];
            $priority = $_POST['priority'];

            $stmt = $this->pdo->prepare("INSERT INTO todo (title, description, date, time, category, priority) 
                                         VALUES (:title, :description, :date, :time, :category, :priority)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':time', $time);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':priority', $priority);

            if ($stmt->execute()) {
                echo '<script>alert("Tugas berhasil ditambahkan!");</script>';
            } else {
                echo '<script>alert("Gagal menambahkan tugas!");</script>';
            }
        }
        header('Location: index.php');
        exit();
    }

    // Fungsi untuk menghapus tugas yang dipilih
    private function deleteSelectedTodos() {
        if (isset($_POST['ids']) && is_array($_POST['ids'])) {
            $ids = $_POST['ids'];

            // Buat placeholder untuk query
            $placeholders = implode(',', array_fill(0, count($ids), '?'));

            $stmt = $this->pdo->prepare("DELETE FROM todo WHERE id IN ($placeholders)");
            if ($stmt->execute($ids)) {
                echo '<script>alert("Tugas yang dipilih berhasil dihapus!");</script>';
            } else {
                echo '<script>alert("Gagal menghapus tugas!");</script>';
            }
        } else {
            echo '<script>alert("Harap pilih data yang ingin dihapus!");</script>';
        }
        header('Location: index.php');
        exit();
    }

    // Fungsi untuk menampilkan daftar tugas
    private function showTodoList() {
        $stmt = $this->pdo->query("SELECT * FROM todo ORDER BY date, time");
        $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'views/todoList.php';
    }
}
