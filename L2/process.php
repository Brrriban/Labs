<?php

// Видалення cookie
setcookie("username", "", time() - 3600);

// Перенаправлення назад
header("Location: lab2.php");
exit();

?>