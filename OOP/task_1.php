<?php
namespace  App\OOP;

class President
{
    public $name = "Barack Obama";

    public function greet($userName) {
        return sprintf("Hello %s, my name is %s, nice to meet you!", $userName, $this->name);
    }
}

$us_president = new President();
$president_name = $us_president->name;
$greetings_from_president = $us_president->greet('Donald');

echo PHP_EOL;
echo $president_name . PHP_EOL;
echo $greetings_from_president . PHP_EOL;