<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["username"]);

    if (!empty($name)) {

        setcookie("username", $name, time() + (7 * 24 * 60 * 60));

        header("Location: lab2.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Робота з COOKIE</title>
</head>
<body>

<h2>1. Робота з $_COOKIE</h2>

<?php
if (isset($_COOKIE["username"])) {

    echo "<h3>Вітаємо, " . htmlspecialchars($_COOKIE["username"]) . "!</h3>";

    echo '<a href="process.php">
            <button>Видалити Cookie</button>
          </a>';

} else {

?>

<!-- Форма введення імені -->
<form method="POST" action="">
    <label>Введіть ваше ім'я:</label><br><br>

    <input type="text" name="username" required><br><br>

    <input type="submit" value="Зберегти">
</form>

<?php
}
?>

</body>
</html>