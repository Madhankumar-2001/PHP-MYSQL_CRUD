<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave it empty if no password is set by default
$dbname = "crud_example";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["username"] . " - Email: " . $row["email"] ."Password: " . $row["password"] ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
