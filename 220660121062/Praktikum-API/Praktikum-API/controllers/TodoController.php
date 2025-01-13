<?php
class TodoController {
    private $apiBaseUrl;

    public function __construct($apiBaseUrl) {
        $this->apiBaseUrl = rtrim($apiBaseUrl, '/');
    }

    public function handleRequest() {
        $action = $_POST['action'] ?? null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            switch ($action) {
                case 'add':
                    $this->addTodo();
                    break;
                case 'delete_selected':
                    $this->deleteSelectedTodos();
                    break;
                default:
                    $this->sendAlert("Aksi tidak valid!");
            }
        }

        $this->showTodoList();
    }

    private function addTodo() {
        $data = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'date' => $_POST['date'],
            'time' => $_POST['time'],
            'category' => $_POST['category'],
            'priority' => $_POST['priority'],
        ];
        $response = $this->apiRequest('/todos', 'POST', $data);
        $this->sendAlert($response['message']);
        $this->redirect('index.php');
    }

    private function deleteSelectedTodos() {
        $ids = $_POST['ids'] ?? [];
        $response = $this->apiRequest('/todos', 'DELETE', ['ids' => $ids]);
        $this->sendAlert($response['message']);
        $this->redirect('index.php');
    }

    private function showTodoList() {
        $response = $this->apiRequest('/todos', 'GET');
        $todos = $response['data'] ?? [];
        include 'views/todoList.php';
    }

    private function apiRequest($endpoint, $method, $data = []) {
        $url = $this->apiBaseUrl . $endpoint;
        $options = [
            'http' => [
                'header' => "Content-Type: application/json\r\n",
                'method' => $method,
                'content' => json_encode($data),
            ],
        ];
        if ($method === 'GET') unset($options['http']['content']);
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result ? json_decode($result, true) : ['success' => false, 'message' => 'Tidak dapat mengakses API'];
    }

    private function sendAlert($message) {
        echo "<script>alert('$message');</script>";
    }

    private function redirect($url) {
        header("Location: $url");
        exit();
    }
}
?>
