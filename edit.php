<?php
require_once "Student.php";
$student = new Student();

$id = $_GET["id"];
$data = $student->getStudentById($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $major = $_POST["major"];
    
    if ($student->updateStudent($id, $name, $nim, $major)) {
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Edit Mahasiswa</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text" name="name" value="<?= $data['name'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">NIM:</label>
                <input type="text" name="nim" value="<?= $data['nim'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan:</label>
                <input type="text" name="major" value="<?= $data['major'] ?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>

