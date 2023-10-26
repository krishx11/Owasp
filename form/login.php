<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel='stylesheet' href='../css/style.css'>
</head>
<body>
    <div class="container">
    <h1>Login</h1>
    <form action="../server/login_check.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="Username" required><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="pass" required><br><br>

        <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>
