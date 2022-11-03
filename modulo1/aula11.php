<?php

/*
*   Orientação a objetos >>>>
*   Injeção Dependências
*/

use Money as GlobalMoney;

interface Money
{
    public function getMoney();
}

class Bank implements Money
{
    public function getMoney()
    {
        return 100;
    }
}

class Broker implements Money
{
    public function getMoney()
    {
        return 140;
    }
}

class operationService
{
    public function retriveInvestiment(GlobalMoney $institution)
    {
        return $institution->getMoney();
    }
}

$service = new operationService();
echo $service->retriveInvestiment(new Bank);
