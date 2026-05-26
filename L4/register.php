<?php

require_once "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (!empty($username) && !empty($email) && !empty($password)) {

        // Хешування пароля
        $hashedPassword = md5($password);

        // Prepared statement
        $stmt = $conn->prepare(
            "INSERT INTO users (username, email, password)
             VALUES (?, ?, ?)"
        );

        $stmt->bind_param(
            "sss",
            $username,
            $email,
            $hashedPassword
        );

        if ($stmt->execute()) {
            $message = "Реєстрація успішна!";
        } else {
            $message = "Помилка: користувач вже існує.";
        }

        $stmt->close();

    } else {
        $message = "Заповніть усі поля.";
    }
}

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
</head>
<body>

<h2>Реєстрація</h2>

<form method="POST">

    <label>Ім'я користувача:</label><br>
    <input type="text" name="username"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Пароль:</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Зареєструватися">

</form>

<p><?php echo $message; ?></p>

<a href="login.php">Увійти</a>

</body>
</html>