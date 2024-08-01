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

    public function createTable() {
        $table_create_query = "CREATE TABLE IF NOT EXISTS partisipant (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(255) NOT NULL
        )";
        $this->conn->query($table_create_query);
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

    public function create($nama) {
        $query = "INSERT INTO " . $this->table_name . " (nama) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $nama);

        return $stmt->execute();
    }
}

$database = new Database();
$db = $database->getConnection();
$database->createTable();
$partisipant = new Partisipant($db);

$partisipant->create('Alfi AC');

echo "Data inserted successfully.";

?>
