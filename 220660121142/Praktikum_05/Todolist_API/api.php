<?php

// Aktifkan error reporting untuk debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Memanggil controller TodoController
require_once 'controllers/TodoController.php';

// Menentukan header agar respons berupa JSON
header('Content-Type: application/json');

// Mendapatkan parameter 'action' untuk menentukan tindakan yang akan dijalankan
$action = $_GET['action'] ?? null;
$controller = new TodoController();

switch ($action) {
    case 'list':
        // Mendapatkan daftar semua todo
        $todos = $controller->index();
        echo json_encode(['pesan' => 'Daftar tugas berhasil diambil!', 'data' => $todos]);
        break;

    case 'add':
        // Menambahkan todo baru
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputData = json_decode(file_get_contents('php://input'), true);

            if (isset($inputData['task']) && !empty($inputData['task'])) {
                $todo = $controller->add($inputData['task']);
                echo json_encode(['pesan' => 'Tugas berhasil ditambahkan!', 'data' => $todo]);
            } else {
                echo json_encode(['pesan' => 'Tugas gagal ditambahkan. Task tidak boleh kosong.']);
            }
        } else {
            echo json_encode(['pesan' => 'Metode permintaan tidak valid. Gunakan POST untuk menambahkan tugas.']);
        }
        break;

    case 'complete':
        // Menandai todo sebagai selesai
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputData = json_decode(file_get_contents('php://input'), true);

            if (isset($inputData['id']) && !empty($inputData['id'])) {
                $todo = $controller->markAsCompleted($inputData['id']);
                echo json_encode(['pesan' => 'Tugas berhasil diselesaikan!', 'data' => $todo]);
            } else {
                echo json_encode(['pesan' => 'Tugas gagal diselesaikan. ID tidak boleh kosong.']);
            }
        } else {
            echo json_encode(['pesan' => 'Metode permintaan tidak valid. Gunakan POST untuk menyelesaikan tugas.']);
        }
        break;

    case 'delete':
        // Menghapus todo
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputData = json_decode(file_get_contents('php://input'), true);

            if (isset($inputData['id']) && !empty($inputData['id'])) {
                $todo = $controller->delete($inputData['id']);
                echo json_encode(['pesan' => 'Tugas berhasil dihapus!', 'data' => $todo]);
            } else {
                echo json_encode(['pesan' => 'Tugas gagal dihapus. ID tidak boleh kosong.']);
            }
        } else {
            echo json_encode(['pesan' => 'Metode permintaan tidak valid. Gunakan POST untuk menghapus tugas.']);
        }
        break;

    case 'edit':
        // Memperbarui todo
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputData = json_decode(file_get_contents('php://input'), true);

            if (isset($inputData['id']) && !empty($inputData['id']) && isset($inputData['task']) && !empty($inputData['task'])) {
                $todo = $controller->edit($inputData['id'], $inputData['task']);
                echo json_encode(['pesan' => 'Tugas berhasil diupdate!', 'data' => $todo]);
            } else {
                echo json_encode(['pesan' => 'Tugas gagal diupdate. ID dan Task tidak boleh kosong.']);
            }
        } else {
            echo json_encode(['pesan' => 'Metode permintaan tidak valid. Gunakan POST untuk memperbarui tugas.']);
        }
        break;

    default:
        // Jika aksi tidak dikenali
        echo json_encode(['pesan' => 'Aksi tidak valid']);
}
