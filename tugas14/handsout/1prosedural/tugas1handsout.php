<?php
$host = "localhost";
$db_name = "vsga";
$username = "root";
$password = "aur0ra";

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$table_create_query = "CREATE TABLE IF NOT EXISTS partisipant (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL
)";
$conn->query($table_create_query);

$insert_query = "INSERT INTO partisipant (nama) VALUES ('ZCahyono')";
$conn->query($insert_query);

echo "Data inserted successfully.";

$conn->close();
?>
