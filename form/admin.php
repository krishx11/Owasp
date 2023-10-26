<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<div class = container-new>
<h1>Admin</h1>  
<button id="Button1" class="button">Dashboard</button>
<button id="Button2" class="button">Database</button>
</div>
<script>
document.getElementById("Button1").onclick = function () {
    location.href = "dashboard.php";
};
</script>
<script>
document.getElementById("Button2").onclick = function () {
    location.href = "db.php";
};
</script>
<body>
    
</body>
</html>