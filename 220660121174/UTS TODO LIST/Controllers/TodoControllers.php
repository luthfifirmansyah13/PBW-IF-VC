<?php
// controllers/TodoController.php

require_once 'Models/TodoModels.php';

class TodoController {
    private $todoModel;

    public function __construct() {
        $this->todoModel = new TodoModel();
    }

    // Menampilkan semua todo
    public function index() {
        $todos = $this->todoModel->getAllTodos();
        include 'Views/ListTodos.php'; // Tampilkan tampilan
    }

    // Menambahkan todo baru
    public function add() {
        if (isset($_POST['task']) && !empty($_POST['task'])) {
            $task = $_POST['task'];
            if ($this->todoModel->createTodo($task)) {
                header('Location: index.php'); // Arahkan kembali ke halaman utama
            } else {
                echo "Gagal menambahkan todo";
            }
        }
    }

    // Menghapus todo berdasarkan ID
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($this->todoModel->deleteTodo($id)) {
                header('Location: index.php'); // Arahkan kembali ke halaman utama
            } else {
                echo "Gagal menghapus todo";
            }
        }
    }
}
?>
