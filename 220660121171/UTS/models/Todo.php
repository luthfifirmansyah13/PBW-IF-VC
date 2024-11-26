<?php
require_once "core/Database.php";

class Todo
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getAllTodos()
    {
        $query = "SELECT * FROM todo";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addTodo($title, $description, $date, $time, $category, $priority)
    {
        $query = "INSERT INTO todo (title, description, date, time, category, priority) 
                  VALUES (:title, :description, :date, :time, :category, :priority)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":date", $date);
        $stmt->bindParam(":time", $time);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":priority", $priority);
        $stmt->execute();
    }

    public function deleteTodos($ids)
    {
        $idsString = implode(',', $ids);
        $query = "DELETE FROM todo WHERE id IN ($idsString)";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
}
?>
