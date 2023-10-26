<!DOCTYPE html>
<html>
<head>
    <title>Display Table Data</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinfo";
$tableName = "users_data";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database and display the table
$sql = "SELECT * FROM " . $tableName;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Username</th><th>Password</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["full_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["username"] . "</td><td>" . $row["pass"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>

