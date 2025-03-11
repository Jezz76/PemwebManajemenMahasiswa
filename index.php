<?php
require_once "Student.php";
$student = new Student();
$students = $student->getAllStudents();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Data Mahasiswa</h2>
        <a href="add.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $s) : ?>
                    <tr>
                        <td><?= $s['id'] ?></td>
                        <td><?= $s['name'] ?></td>
                        <td><?= $s['nim'] ?></td>
                        <td><?= $s['major'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $s['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?= $s['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
