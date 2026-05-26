<?php

session_start();

require_once "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Хешування в
    $hashedPassword = md5($password);
    $stmt = $conn->prepare(
        "SELECT * FROM users
         WHERE username = ? AND password = ?"
    );

    $stmt->bind_param(
        "ss",
        $username,
        $hashedPassword
    );

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $_SESSION["username"] = $username;

        header("Location: welcome.php");
        exit();

    } else {

        $message = "Невірний логін або пароль.";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Авторизація</title>
</head>
<body>

<h2>Вхід</h2>

<form method="POST">

    <label>Ім'я користувача:</label><br>
    <input type="text" name="username"><br><br>

    <label>Пароль:</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Увійти">

</form>

<p><?php echo $message; ?></p>

<a href="register.php">Реєстрація</a>

</body>
</html>