<?php

session_start();

// Перевірка авторизації
if (!isset($_SESSION["username"])) {

    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>

<h2>
    Вітаємо,
    <?php echo htmlspecialchars($_SESSION["username"]); ?>!
</h2>

<p>Ви успішно авторизувалися.</p>

<a href="logout.php">
    <button>Вийти</button>
</a>

</body>
</html>