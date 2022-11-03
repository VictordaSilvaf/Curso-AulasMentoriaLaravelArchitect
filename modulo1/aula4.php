<?php

/*
*   Named arguments >>>>
*   Spreed Operator >>>>
*/

function savePerson(string $name, string $age, string $country, string $height, string $momName, string $preferedIDE)
{
    return "Person saved!";
}

$array = [
    'name' => 'John',
    'age' => '20',
    'country' => 'USA',
    'height' => '1.80',
    'momName' => 'Mary',
    'preferedIDE' => 'VSCode',
];

echo savePerson(
    ...$array
);
