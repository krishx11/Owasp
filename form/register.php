<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Registration</h1>

        <form action = "../server/reg_script.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="full_name" required><br>

            <label for="name">Email</label>
            <input type="email" id="email" name="Email" required><br>

            <label for="name">Username</label>
            <input type="text" id="username" name="Username" required><br>

            <label for="name">Password</label>
            <input type="password" id="password" name="pass" minlength="8"><br>

            <input type="submit" value="Submit" name="save ">
        </form>
    </div>
</body>
</html>