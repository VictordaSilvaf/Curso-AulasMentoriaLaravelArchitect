<?php

/*
*   Orientação a objetos >>>>
*   Interfaces
*/

class Bank
{
    public function __construct(public ?string $balance = '0')
    {
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
}

class NationalBank extends Bank
{
    public function getBalance()
    {
        return 'R$ ' . $this->balance;
    }
}

class InternationalBank extends Bank
{
    public function getBalance()
    {
        return 'US$ ' . $this->balance;
    }
}

$national = new NationalBank();
$national->setBalance('10');

$international = new InternationalBank();
$international->setBalance('10');

echo "Nacional: " . $national->getBalance();
echo "\n";
echo "Internacional: " . $international->getBalance();
