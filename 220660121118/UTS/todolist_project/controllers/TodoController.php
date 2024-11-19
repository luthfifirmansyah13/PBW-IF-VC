<?php
require_once 'models/Todo.php';

class TodoController {
    public function add($task, $category) {
        if (!empty($task) && !empty($category)) {
            Todo::create($task, $category);
        }
        header('Location: index.php');
    }

    public function markAsCompleted($id) {
        Todo::complete($id);
        header('Location: index.php');
    }

    public function delete($id) {
        Todo::delete($id);
        header('Location: index.php');
    }

    public function index() {
        return Todo::getAll();
    }

    public function toggleComplete($id) {
        // Cek apakah task ada
        $stmt = $this->db->prepare("SELECT * FROM todos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $task = $result->fetch_assoc();

        if ($task) {
            // Toggle status completed
            $newStatus = $task['is_completed'] == 1 ? 0 : 1;
            $updateStmt = $this->db->prepare("UPDATE todos SET is_completed = ? WHERE id = ?");
            $updateStmt->bind_param("ii", $newStatus, $id);
            $updateStmt->execute();
        }
    }
}
?>
