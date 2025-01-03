<?php
class Database
{
    private $host = "localhost";
    private $db_name = "todo_app"; // Ganti dengan nama database Anda
    private $username = "root";         // Ganti dengan username MySQL Anda
    private $password = "";             // Ganti dengan password MySQL Anda
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;
    }
}
