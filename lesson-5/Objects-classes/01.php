<?php

class Product {
    private string $name;
    private float $startPrice;
    private int $amount;
    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this-> name = $name;
        $this-> startPrice = $startPrice;
        $this-> amount = $amount;
    }

    public function printProduct(): string {
        return $this->name . ", price $this->startPrice" . ", amount $this->amount" . PHP_EOL;
    }

    public function changePrice(float $newPrice): float {
        return $this->startPrice = $newPrice;
    }

    public function changeAmount(int $newAmount): int {
        return $this->amount = $newAmount;
    }
}

$mouse = new Product('Logitech mouse', 70, 14);
$iphone = new Product('iPhone 5s', 999.99, 3);
$projector = new Product('Epson EB-U05', 440.46, 1);

echo $mouse->printProduct();
echo $iphone->printProduct();
echo $projector->printProduct();

$mouse->changePrice(50);
echo $mouse->printProduct(); // changed price to 50

$iphone->changeAmount(5);
echo $iphone->printProduct();
