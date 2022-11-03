<?php

namespace App;

use Tongedev\RfbDocument\CPFDocument;

class Person
{
    public string $name;
    public int $age;

    private string $cpf;

    public function setCpf($document)
    {
        $cpfClass = new CPFDocument();
        $this->cpf = $cpfClass->sanitize($document);
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getCpfWithMask()
    {
        $cpfClass = new CPFDocument();
        return $cpfClass->format($this->cpf);
    }
}
