<?php

/*
*   Orientação a objetos >>>>
*   Interfaces
*/

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
        return 100;
    }
}
