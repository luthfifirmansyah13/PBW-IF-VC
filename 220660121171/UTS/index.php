<?php
// Koneksi database menggunakan PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=todo_app', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Inisialisasi controller
require_once 'controllers/TodoController.php';
$controller = new TodoController($pdo); // Berikan $pdo sebagai argumen
$controller->handleRequest();
