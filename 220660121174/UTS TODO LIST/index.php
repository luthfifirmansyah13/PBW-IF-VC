<?php
// index.php

require_once 'Controllers/TodoControllers.php';

// Menangani aksi yang dikirimkan melalui URL
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = new TodoController();

switch ($action) {
    case 'add':
        $controller->add(); // Menambahkan todo
        break;
    case 'delete':
        $controller->delete(); // Menghapus todo
        break;
    case 'index':
    default:
        $controller->index(); // Menampilkan semua todo
        break;
}
?>
