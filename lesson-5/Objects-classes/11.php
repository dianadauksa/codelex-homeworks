<?php

class Account {
    private string $accountName;
    private float $balance;

    public function __construct(string $accountName, float $balance) {
        $this->accountName = $accountName;
        $this->balance = $balance;
    }

    public function __toString() {
        $balance = number_format($this->balance, 2);
        return "$this->accountName, Balance: $" . $balance . PHP_EOL;
    }

    public function getAccountName(): string {
        return $this->accountName;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function withdraw(float $amount) {
        if($this->balance - $amount >= 0){
            $this->balance -= $amount;
        } else throw new Error('Insufficient funds! :(');
    }

    public function deposit(float $amount) {
        $this->balance += $amount;
    }

    public function transfer(Account $from, Account $to, int $howMuch): bool {
        if ($from === $this) {
            $from->withdraw($howMuch);
            $to->deposit($howMuch);
            return true;
        } else {
            return false;
        }
    }
}

class Test {
    public static function Main() {
        $testAccount = new Account('Test', 100);
        $testAccount->deposit(20);
        echo $testAccount;
    }
}

class FirstMoneyTransfer {
    public static function Main() {
        $matt = new Account("Matt's account", 1000);
        $me = new Account("My account", 0);
        $matt->withdraw(100);
        $me->deposit(100);
        echo $matt, $me; // Matt's account, Balance: $900.00; My account, Balance: $100.00
    }
}

class MoneyTransfers {
    public static function Main() {
        $A = new Account('A', 100);
        $B = new Account('B', 0);
        $C = new Account('C', 0);
        $A->transfer($A, $B, 50);
        $B->transfer($B, $C, 25);
        echo $A, $B, $C;

    }
}

Test::Main(); //Test, Balance: $120.00
FirstMoneyTransfer::Main(); // Matt's account, Balance: $900.00; My account, Balance: $100.00
MoneyTransfers::Main(); // A, Balance: $50.00; B, Balance: $25.00; C, Balance: $25.00










