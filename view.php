<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave it empty if no password is set by default
$dbname = "crud_example";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Overall Inserted Data</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
