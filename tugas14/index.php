<?php
require_once 'Database.php';
require_once 'crud.php';

$database = new Database();
$db = $database->getConnection();
$student = new Student($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create'])) {
        $student->nim = $_POST['nim'];
        $student->nama = $_POST['nama'];
        $student->tempat_lahir = $_POST['tempat_lahir'];
        $student->tanggal_lahir = $_POST['tanggal_lahir'];
        $student->jurusan = $_POST['jurusan'];
        $student->program_studi = $_POST['program_studi'];
        $student->ipk = $_POST['ipk'];
        $student->create();
    } elseif (isset($_POST['update'])) {
        $student->nim = $_POST['nim'];
        $student->nama = $_POST['nama'];
        $student->tempat_lahir = $_POST['tempat_lahir'];
        $student->tanggal_lahir = $_POST['tanggal_lahir'];
        $student->jurusan = $_POST['jurusan'];
        $student->program_studi = $_POST['program_studi'];
        $student->ipk = $_POST['ipk'];
        $student->update();
    } elseif (isset($_POST['delete'])) {
        $student->nim = $_POST['nim'];
        $student->delete();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
</head>
<body>

<h2>Form Mahasiswa</h2>
<form method="POST" action="index.php">
    NIM: <input type="text" name="nim" required><br>
    Nama: <input type="text" name="nama" required><br>
    Tempat Lahir: <input type="text" name="tempat_lahir" required><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br>
    Jurusan: <input type="text" name="jurusan" required><br>
    Program Studi: <input type="text" name="program_studi" required><br>
    IPK: <input type="text" name="ipk" required><br>
    <input type="submit" name="create" value="Create">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">
</form>

<h2>Data Mahasiswa</h2>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jurusan</th>
        <th>Program Studi</th>
        <th>IPK</th>
    </tr>

    <?php
    $stmt = $student->read();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['nim']}</td>";
        echo "<td>{$row['nama']}</td>";
        echo "<td>{$row['tempat_lahir']}</td>";
        echo "<td>{$row['tanggal_lahir']}</td>";
        echo "<td>{$row['jurusan']}</td>";
        echo "<td>{$row['program_studi']}</td>";
        echo "<td>{$row['ipk']}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
