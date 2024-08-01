<?php
class Database {
    private $host = "localhost";
    private $db_name = "vsga";
    private $username = "root";
    private $password = "aur0ra";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}

class Partisipant {
    private $conn;
    private $table_name = "partisipant";

    public $id;
    public $nama;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY nama ASC";
        return $this->conn->query($query);
    }
}

$database = new Database();
$partisipant = new Partisipant($database->getConnection());

$result = $partisipant->readAll();
?>
<h2>Data Partisipant</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nama']}</td>";
        echo "</tr>";
    }
    ?>
</table>