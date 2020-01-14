<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a href="lab4_main.php">Назад</a>
<p>
<?php
    if (isset($_POST['my_username'])) {
        $my_username = $_POST['my_username'];
        setcookie("my_username", $my_username, time() + 60);
    }
    echo "set Cookie name: " . $my_username;
?>
</p>
</body>
</html>