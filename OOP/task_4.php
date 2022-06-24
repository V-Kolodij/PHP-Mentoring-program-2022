<?php
namespace  App\OOP;

class Person
{
    const SPECIES = "Homo Sapiens";

    public static function greet($userName) {
        return sprintf("Hello %s, my name is %s, nice to meet you!", $userName, self::SPECIES);
    }
}

$president_name = CurrentUSPresident::NAME;
$greetings_from_president = CurrentUSPresident::greet('Ronald');

echo PHP_EOL;
echo $president_name . PHP_EOL;
echo $greetings_from_president . PHP_EOL;