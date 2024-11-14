<?php
require_once 'core/Database.php';

class Todo {
    public static function getAll() {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM todos ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($task, $category) {
        $db = Database::getInstance();
        $stmt = $db->prepare("INSERT INTO todos (task, category) VALUES (:task, :category)");
        $stmt->bindParam(':task', $task);
        $stmt->bindParam(':category', $category);
        $stmt->execute();
    }

    public static function complete($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("UPDATE todos SET is_completed = 1 WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public static function delete($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM todos WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
