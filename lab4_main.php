<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 4</title>
</head>
<body>
<p>
<?php
    if (isset($_COOKIE['my_username'])) {
        echo "Cookie name: " . $_COOKIE['my_username'];
    }
    else {
        echo "cookie is empty";
    }
?>
</p>
<form action="lab4.php" method="post">
    <label for="my_username">Имя пользователя</label>
    <input type="text" id="my_username" name="my_username">
    <button type="submit">Отправить</button>
</form>
</body>
</html>
