<?php

class BankAccount {
    private string $accountName;
    private float $balance = 0;

    function __construct(string $name, float $balance) {
        $this->accountName = $name;
        $this->balance = $balance;
    }

    function show_user_name_and_balance(): string {
        if ($this->balance < 0) {
            return $this->accountName . ", -$" . number_format(abs($this->balance), 2) . PHP_EOL;
        } else {
            return $this->accountName . ', $' . number_format($this->balance, 2) . PHP_EOL;
        }
    }
}

$ben = new BankAccount('Benson', 17.25);
echo $ben->show_user_name_and_balance(); // Benson, $17.25

$tom = new BankAccount('Ford', -17.50);
echo $tom->show_user_name_and_balance(); // Ford, -$17.50
