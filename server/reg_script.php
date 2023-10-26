<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['full_name'];
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = $_POST['pass'];


    $servername = "localhost";
    $s_username = "root";
    $s_password = "";
    $dbname = "userinfo";

    $conn = new mysqli($servername, $s_username, $s_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users_data VALUES('$name','$email','$username','$password')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../form/success.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
}
?>
