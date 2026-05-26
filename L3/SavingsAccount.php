<?php

require_once "BankAccount.php";

class SavingsAccount extends BankAccount
{
    //Статична ставка
    public static $interestRate = 0.10;

    //Нарахування відсотків
    public function applyInterest()
    {
        $interest = $this->balance * self::$interestRate;

        $this->balance += $interest;

        echo "Нараховано відсотки: $interest {$this->currency}<br>";
    }
}

?>