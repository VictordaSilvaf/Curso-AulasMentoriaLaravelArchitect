<?php

/*
*   Orientação a objetos >>>>
*   Encapsulamento public, private e protected
*/
class Bank
{
    private $name;
    public $adress;

    public function setTax()
    {
        return 0.1;
    }

    public function setName($name)
    {
        $this->name = 'banco ' . $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$backOne = new Bank();
$backTwo = new Bank();

$backOne->setName('Banco do Brasil');
$backTwo->setName('Caixa Econômica');

echo $backOne->getName();
echo "\n";
echo $backTwo->getName();
