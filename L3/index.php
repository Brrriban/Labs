<?php

require_once "BankAccount.php";
require_once "SavingsAccount.php";

echo "<h2>Тестування BankAccount</h2>";

try {

    // Створення звичайного рахунку
    $account1 = new BankAccount(1000, "USD");

    echo "Поточний баланс: " . $account1->getBalance() . " USD<br><br>";

    // Поповнення
    $account1->deposit(500);

    echo "Баланс після поповнення: "
        . $account1->getBalance()
        . " USD<br><br>";

    // Зняття коштів
    $account1->withdraw(300);

    echo "Баланс після зняття: "
        . $account1->getBalance()
        . " USD<br><br>";

    // Помилка — недостатньо коштів
    $account1->withdraw(5000);

} catch (Exception $e) {

    echo "<b>Помилка:</b> " . $e->getMessage() . "<br><br>";
}

echo "<hr>";

echo "<h2>Тестування SavingsAccount</h2>";

try {

    // Створення накопичувального рахунку
    $savings = new SavingsAccount(2000, "EUR");

    echo "Поточний баланс: "
        . $savings->getBalance()
        . " EUR<br><br>";

    // Поповнення
    $savings->deposit(1000);

    // Нарахування відсотків
    $savings->applyInterest();

    echo "Баланс після нарахування відсотків: "
        . $savings->getBalance()
        . " EUR<br><br>";

    // Помилка — неправильна сума
    $savings->deposit(-100);

} catch (Exception $e) {

    echo "<b>Помилка:</b> " . $e->getMessage();
}

?>