<?php
class Student {
    private $conn;
    private $table_name = "mahasiswa";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create student
    public function create($data) {
        $query = "INSERT INTO " . $this->table_name . " (nim, nama, tempat_lahir, tanggal_lahir, jurusan, program_studi, ipk) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("isssssd", $data['nim'], $data['nama'], $data['tempat_lahir'], $data['tanggal_lahir'], $data['jurusan'], $data['program_studi'], $data['ipk']);

        return $stmt->execute();
    }

    // Read all students
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        return $this->conn->query($query);
    }

    // Update student
    public function update($data) {
        $query = "UPDATE " . $this->table_name . " SET nama=?, tempat_lahir=?, tanggal_lahir=?, jurusan=?, program_studi=?, ipk=? WHERE nim=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssd", $data['nama'], $data['tempat_lahir'], $data['tanggal_lahir'], $data['jurusan'], $data['program_studi'], $data['ipk'], $data['nim']);

        return $stmt->execute();
    }

    // Delete student
    public function delete($nim) {
        $query = "DELETE FROM " . $this->table_name . " WHERE nim=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $nim);

        return $stmt->execute();
    }
}
?>
