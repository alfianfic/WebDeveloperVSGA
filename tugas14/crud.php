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
        $query = "INSERT INTO " . $this->table_name . " SET nim=:nim, nama=:nama, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, jurusan=:jurusan, program_studi=:program_studi, ipk=:ipk";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":tempat_lahir", $this->tempat_lahir);
        $stmt->bindParam(":tanggal_lahir", $this->tanggal_lahir);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":program_studi", $this->program_studi);
        $stmt->bindParam(":ipk", $this->ipk);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Read all students
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    // Update student
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nama=:nama, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, jurusan=:jurusan, program_studi=:program_studi, ipk=:ipk WHERE nim=:nim";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":tempat_lahir", $this->tempat_lahir);
        $stmt->bindParam(":tanggal_lahir", $this->tanggal_lahir);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":program_studi", $this->program_studi);
        $stmt->bindParam(":ipk", $this->ipk);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete student
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE nim = :nim";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nim", $this->nim);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
