<?php
class Student {
    private $conn;
    private $table_name = "mahasiswa";

    public $nim;
    public $nama;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $jurusan;
    public $program_studi;
    public $ipk;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create student
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nim=?, nama=?, tempat_lahir=?, tanggal_lahir=?, jurusan=?, program_studi=?, ipk=?";
        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("isssssd", $this->nim, $this->nama, $this->tempat_lahir, $this->tanggal_lahir, $this->jurusan, $this->program_studi, $this->ipk);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Read all students
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->query($query);
        return $result;
    }

    // Update student
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nama=?, tempat_lahir=?, tanggal_lahir=?, jurusan=?, program_studi=?, ipk=? WHERE nim=?";
        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("ssssssd", $this->nama, $this->tempat_lahir, $this->tanggal_lahir, $this->jurusan, $this->program_studi, $this->ipk, $this->nim);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete student
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE nim = ?";
        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("i", $this->nim);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
