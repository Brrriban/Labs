<?php

require_once "AccountInterface.php";

class BankAccount implements AccountInterface
{
    // Мінімальний баланс
    const MIN_BALANCE = 0;

    // Властивості класу
    protected $balance;
    protected $currency;


    public function __construct($balance, $currency)
    {
        $this->balance = $balance;
        $this->currency = $currency;
    }

    // Поповнення 
    public function deposit($amount)
    {
        if ($amount <= 0) {
            throw new Exception("Сума поповнення повинна бути більшою за 0.");
        }

        $this->balance += $amount;

        echo "Рахунок поповнено на $amount {$this->currency}<br>";
    }

    // Зняття 
    public function withdraw($amount)
    {
        if ($amount <= 0) {
            throw new Exception("Сума зняття повинна бути більшою за 0.");
        }

        if ($amount > $this->balance) {
            throw new Exception("Недостатньо коштів.");
        }

        $this->balance -= $amount;

        echo "З рахунку знято $amount {$this->currency}<br>";
    }

    // Отримати
    public function getBalance()
    {
        return $this->balance;
    }

    // Отримання валюти
    public function getCurrency()
    {
        return $this->currency;
    }
}

?>