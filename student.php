<?php
require_once "db.php";

class Student {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllStudents() {
        $stmt = $this->db->conn->prepare("SELECT * FROM students");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addStudent($name, $nim, $major) {
        $stmt = $this->db->conn->prepare("INSERT INTO students (name, nim, major) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $nim, $major]);
    }

    public function getStudentById($id) {
        $stmt = $this->db->conn->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateStudent($id, $name, $nim, $major) {
        $stmt = $this->db->conn->prepare("UPDATE students SET name=?, nim=?, major=? WHERE id=?");
        return $stmt->execute([$name, $nim, $major, $id]);
    }

    public function deleteStudent($id) {
        $stmt = $this->db->conn->prepare("DELETE FROM students WHERE id=?");
        return $stmt->execute([$id]);
    }
}
?>
