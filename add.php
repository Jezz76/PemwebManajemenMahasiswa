<?php
require_once "Student.php";
$student = new Student();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $major = $_POST["major"];
    
    if ($student->addStudent($name, $nim, $major)) {
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Mahasiswa</h2>
        <form method="post">
            <div class="mb-3">
                <label>Nama:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>NIM:</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Jurusan:</label>
                <input type="text" name="major" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</body>
</html>
