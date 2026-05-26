<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim($_POST["first_name"]);
    $lastName = trim($_POST["last_name"]);
    if (empty($firstName) || empty($lastName)) {

        echo "Помилка: усі поля повинні бути заповнені.";

    } 
    elseif (!is_string($firstName) || !is_string($lastName)) {

        echo "Помилка: некоректний тип даних.";

    } 
    else {

        $firstName = htmlspecialchars($firstName);
        $lastName = htmlspecialchars($lastName);
        echo "<h2>Вітаємо, $firstName $lastName!</h2>";
    }

} else {

    echo "Дані не були надіслані.";

}

?>