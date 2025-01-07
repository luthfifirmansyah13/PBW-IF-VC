<?php
require_once '../core/Database.php';
require_once '../models/Todo.php';

// Koneksi database
$db = Database::getInstance();
$pdo = $db->getConnection();

// Ambil metode dan path
$method = $_SERVER['REQUEST_METHOD'];
$path = trim($_SERVER['REQUEST_URI'] ?? '', '/');
$basePath = 'UTS/api/api.php';
$route = str_replace($basePath, '', $path);
$route = trim($route, '/');

// Inisialisasi model
$todo = new Todo();

header('Content-Type: application/json');

// Routing berdasarkan metode
if ($route === 'todos') {
    switch ($method) {
        case 'GET':
            echo json_encode(['success' => true, 'data' => $todo->getAll($pdo)]);
            break;
        case 'POST':
            $input = json_decode(file_get_contents('php://input'), true);
            echo json_encode($todo->add($pdo, $input));
            break;
        case 'DELETE':
            $input = json_decode(file_get_contents('php://input'), true);
            echo json_encode($todo->delete($pdo, $input['ids'] ?? []));
            break;
        default:
            http_response_code(405);
            echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    }
} else {
    http_response_code(404);
    echo json_encode(['success' => false, 'message' => 'Not Found']);
}
?>
