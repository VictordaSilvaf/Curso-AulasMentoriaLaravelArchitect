<?php

/*
*   Orientação a objetos >>>>
*   Herança
*/

class Bank
{
    private $name;
    public $adress;

    public function setName($name)
    {
        $this->name = 'banco ' . $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class NationalBank extends Bank
{
    public function getTax()
    {
        return 0.1;
    }
}

$backOne = new Bank();
$backTwo = new NationalBank();

$backOne->setName('Nu Pagamentos S.A.');
$backTwo->setName('Caixa Econômica');

echo $backOne->getName();
// echo $backOne->getTax(); Não funciona
echo "\n";
echo $backTwo->getName();
echo $backTwo->getTax();
