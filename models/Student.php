<?php
require_once 'config/Database.php';

class Student {
    private $conn;
    public $id;
    public $name;
    public $student_id;
    public $email;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function create() {
        $query = "INSERT INTO students (name, student_id, email) VALUES (:name, :student_id, :email)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":student_id", $this->student_id);
        $stmt->bindParam(":email", $this->email);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM students";
        return $this->conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete() {
        $query = "DELETE FROM students WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }
}
?>
