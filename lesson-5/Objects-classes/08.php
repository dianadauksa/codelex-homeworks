<?php

class SavingsAccount{
    private float $amount;
    private float $annualRate;

    public function __construct(float $amount, float $annualRate) {
        $this->amount = $amount;
        $this->annualRate = $annualRate;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function withdraw(float $withdrawnAmount): void {
        if($this->amount - $withdrawnAmount >= 0){
            $this->amount -= $withdrawnAmount;
        } else throw new Error('Insufficient funds! :(');
    }

    public function deposit(float $depositedAmount): void {
        $this->amount += $depositedAmount;
    }

    public function addInterest(): void {
        $this->amount += $this->amount * $this->annualRate / 12;
    }
}

$amount = (float) readline("How much money is in the account?: ");
$annualRate = (float) readline("Enter the annual interest rate?: ");
$account = new SavingsAccount($amount, $annualRate);
$months = intval(readline("How long has the account been opened (full months)?: "));
$deposited = 0;
$withdrawn = 0;
$accumulatedInterest = 0;

for ($i = 1; $i <= $months ; $i++) {
    $depositedAmount = (float) readline("Enter amount deposited for month: $i: ");
    $account->deposit($depositedAmount);
    $deposited += $depositedAmount;

    $withdrawnAmount = (float) readline("Enter amount withdrawn for month: $i: ");
    $account->withdraw($withdrawnAmount);
    $withdrawn += $withdrawnAmount;

    $amountForInterest = $account->getAmount();
    $account->addInterest();
    $accumulatedInterest += $account->getAmount()-$amountForInterest;
}

echo "Total deposited: $" . number_format($deposited, 2) . PHP_EOL; // Total deposited: $7,830.00
echo "Total withdrawn: $" . number_format($withdrawn, 2) . PHP_EOL; // Total withdrawn: $5,777.00
echo "Interest earned: $" . number_format($accumulatedInterest, 2) . PHP_EOL; // Interest earned: $29,977.72
echo "Ending balance: $" . number_format($account->getAmount(), 2) . PHP_EOL; // Ending balance: $42,030.72