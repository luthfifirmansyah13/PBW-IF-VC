<?php
// models/TodoModel.php

require_once 'Core/Database.php';

class TodoModel {
    private $conn;
    private $table_name = "todos"; // Nama tabel

    // Konstruktor untuk kelas, menghubungkan database
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Mendapatkan semua todo yang ada di database
    public function getAllTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Mengembalikan data sebagai array asosiatif
    }

    // Menambahkan todo baru
    public function createTodo($task) {
        $query = "INSERT INTO " . $this->table_name . " (task) VALUES (:task)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":task", $task);
        return $stmt->execute(); // Mengembalikan true jika berhasil, false jika gagal
    }

    // Memperbarui status todo (selesai atau belum)
    public function updateTodoStatus($id, $is_completed) {
        $query = "UPDATE " . $this->table_name . " SET is_completed = :is_completed WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":is_completed", $is_completed);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    // Menghapus todo berdasarkan ID
    public function deleteTodo($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>
