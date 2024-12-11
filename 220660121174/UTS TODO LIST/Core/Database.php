<?php
// config/Database.php

class Database {
    private $host = 'localhost';
    private $db_name = 'todolist_db'; // Nama database
    private $username = 'root'; // Username MySQL
    private $password = ''; // Password MySQL
    public $conn;

    // Fungsi untuk mendapatkan koneksi PDO
    public function getConnection() {
        $this->conn = null;

        try {
            // Membuat koneksi dengan database MySQL menggunakan PDO
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode
        } catch (PDOException $exception) {
            // Jika gagal koneksi, tampilkan error
            echo "Connection failed: " . $exception->getMessage();
            exit();
        }
        return $this->conn;
    }
}
?>
