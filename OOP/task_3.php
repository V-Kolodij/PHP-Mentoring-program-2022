<?php
namespace  App\OOP;

class CurrentUSPresident
{
    const NAME = "Barack Obama";

    public static function greet($userName) {
        return sprintf("Hello %s, my name is %s, nice to meet you!", $userName, self::NAME);
    }
}

$president_name = CurrentUSPresident::NAME;
$greetings_from_president = CurrentUSPresident::greet('Ronald');

echo PHP_EOL;
echo $president_name . PHP_EOL;
echo $greetings_from_president . PHP_EOL;