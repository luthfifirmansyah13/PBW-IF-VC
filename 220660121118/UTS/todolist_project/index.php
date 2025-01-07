<?php
require_once 'controllers/TodoController.php';

$controller = new TodoController();
$action = $_GET['action'] ?? null;

switch ($action) {
    case 'add':
        $task = $_POST['task'] ?? '';
        $category = $_POST['category'] ?? 'Morning Routine';
        $controller->add($task, $category);
        break;
    case 'complete':
        $id = $_GET['id'] ?? '';
        $controller->markAsCompleted($id);
        break;
    case 'delete':
        $id = $_GET['id'] ?? '';
        $controller->delete($id);
        break;
}

$todos = $controller->index();
require 'views/listTodos.php';
?>
