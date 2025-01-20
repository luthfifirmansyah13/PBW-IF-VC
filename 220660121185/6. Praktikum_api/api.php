<?php

// Aktifkan error reporting untuk memudahkan debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Mengimpor controller Todo
require_once 'controllers/TodoController.php';

// Menentukan header agar respon berupa JSON
header('Content-Type: application/json');

// Mendapatkan parameter 'action' untuk menentukan tindakan apa yang akan dijalankan
$action = $_GET['action'] ?? null;
$controller = new TodoController();

// Menangani berbagai aksi yang bisa dilakukan melalui API
switch ($action) {
    case 'list':
        // Mendapatkan daftar semua todo
        echo json_encode($controller->index());
        break;

    case 'add':
        // Menambahkan todo baru
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputData = json_decode(file_get_contents('php://input'), true);
            if (isset($inputData['task']) && !empty($inputData['task'])) {
                $controller->add($inputData['task']);
                echo json_encode(['message' => 'Todo added successfully']);
            } else {
                echo json_encode(['message' => 'Task is required']);
            }
        } else {
            echo json_encode(['message' => 'Invalid request method. Use POST to add a todo.']);
        }
        break;

    case 'complete':
        // Menandai todo sebagai selesai
        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            $inputData = json_decode(file_get_contents('php://input'), true);
            if (isset($inputData['id'])) {
                $controller->markAsCompleted($inputData['id']);
                echo json_encode(['message' => 'Todo marked as completed']);
            } else {
                echo json_encode(['message' => 'ID is required']);
            }
        } else {
            echo json_encode(['message' => 'Invalid request method. Use PUT to complete a todo.']);
        }
        break;

    case 'delete':
        // Menghapus todo
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $inputData = json_decode(file_get_contents('php://input'), true);
            if (isset($inputData['id'])) {
                $controller->delete($inputData['id']);
                echo json_encode(['message' => 'Todo deleted']);
            } else {
                echo json_encode(['message' => 'ID is required']);
            }
        } else {
            echo json_encode(['message' => 'Invalid request method. Use DELETE to delete a todo.']);
        }
        break;

    default:
        // Jika action tidak ditemukan
        echo json_encode(['message' => 'Invalid action']);
}
