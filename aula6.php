<?php

/*
*   Orientação a objetos >>>>
*   Objetos e Classes
*/
class Bank
{
    public $name;
    public $adress;

    public function tax()
    {
        return 0.1;
    }
}

$backOne = new Bank();
$backTwo = new Bank();

$backOne->name = 'Banco do Brasil';
$backTwo->name = 'Caixa Econômica';

echo $backOne->name;
echo "\n";
echo $backTwo->name;
