<?php
class Todo {
    public function getAll($pdo) {
        $stmt = $pdo->query("SELECT * FROM todo ORDER BY date, time");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($pdo, $data) {
        $stmt = $pdo->prepare("INSERT INTO todo (title, description, date, time, category, priority) 
                               VALUES (:title, :description, :date, :time, :category, :priority)");
        return $stmt->execute($data)
            ? ['success' => true, 'message' => 'Tugas berhasil ditambahkan']
            : ['success' => false, 'message' => 'Gagal menambahkan tugas'];
    }

    public function delete($pdo, $ids) {
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $stmt = $pdo->prepare("DELETE FROM todo WHERE id IN ($placeholders)");
        return $stmt->execute($ids)
            ? ['success' => true, 'message' => 'Tugas berhasil dihapus']
            : ['success' => false, 'message' => 'Gagal menghapus tugas'];
    }
}
?>
