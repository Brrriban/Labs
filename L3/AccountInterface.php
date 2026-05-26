<?php

interface AccountInterface
{
    // Ппоповненню
    public function deposit($amount);

    // Зняття
    public function withdraw($amount);

    // Отримати баланс
    public function getBalance();
}

?>