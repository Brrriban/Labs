<?php

// 1. Створення базового PHP-скрипта
echo "<h2>1. Hello, World!</h2>";
echo "Hello, World!<br><br>";

// 2. Змінні та типи даних
echo "<h2>2. Змінні та типи даних</h2>";

$string = "Привіт";
$integer = 25;
$float = 3.14;
$boolean = true;
echo "Рядок: $string <br>";
echo "Ціле число: $integer <br>";
echo "Число з плаваючою комою: $float <br>";
echo "Булеве значення: " . ($boolean ? "true" : "false") . "<br><br>";
echo "Тип змінної string: ";
var_dump($string);
echo "<br>";
echo "Тип змінної integer: ";
var_dump($integer);
echo "<br>";
echo "Тип змінної float: ";
var_dump($float);
echo "<br>";
echo "Тип змінної boolean: ";
var_dump($boolean);
echo "<br><br>";

// 3. Конкатенація рядків
echo "<h2>3. Конкатенація рядків</h2>";
$firstName = "Іван";
$lastName = "Самойленко";
$fullName = $firstName . " " . $lastName;
echo "Повне ім'я: " . $fullName . "<br><br>";

// 4. Умовні конструкції
echo "<h2>4. Умовні конструкції</h2>";
$number = 7;
if ($number % 2 == 0) {
    echo "Число $number є парним.<br><br>";
} else {
    echo "Число $number є непарним.<br><br>";
}

// 5. Цикли
echo "<h2>5. Цикли</h2>";
echo "Цикл for (від 1 до 10):<br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><br>";
echo "Цикл while (від 10 до 1):<br>";

$j = 10;

while ($j >= 1) {
    echo $j . " ";
    $j--;
}

echo "<br><br>";

// 6. Масиви
echo "<h2>6. Масиви</h2>";
$student = [
    "ім'я" => "Олександр",
    "прізвище" => "Шевченко",
    "вік" => 20,
    "спеціальність" => "Комп'ютерні науки"
];

echo "Ім'я: " . $student["ім'я"] . "<br>";
echo "Прізвище: " . $student["прізвище"] . "<br>";
echo "Вік: " . $student["вік"] . "<br>";
echo "Спеціальність: " . $student["спеціальність"] . "<br><br>";

$student["середній_бал"] = 89.5;
echo "Оновлений масив:<br>";
print_r($student);

?>