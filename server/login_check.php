<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $s_username = "root";
    $s_password = "";
    $dbname = "userinfo";

    $conn = new mysqli($servername, $s_username, $s_password, $dbname);
        //$username = mysqli_real_escape_string($conn,$_POST['Username']);
        //$password = mysqli_real_escape_string($conn,$_POST['pass']);

        $username = $_POST['Username'];
        $password = $_POST['pass'];

        //$hashed_pass = password_hash($password,PASSWORD_BCRYPT);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users_data WHERE username='$username' AND pass='$password'";

    

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>=1){
        // $_SESSION["Username"] = $username;
        // header('Location: ../form/dashboard.php');
        // exit();
        // if($fet=mysqli_fetch_array($result)){
        //     if($fet['pass']==$password)
        //     {
        //         $_SESSION["Username"] = $username;
        //         header('Location: ../form/dashboard.php');
        //         exit();
        //     }
        // }
        $_SESSION["Username"] = $username;
        header('Location: ../form/dashboard.php');
        exit();
        
    }
    else{
        $login_error = "Invalid username or password";
        echo $login_error."<br>";
        echo $sql;     
    }

    mysqli_close($conn);
}
?>
