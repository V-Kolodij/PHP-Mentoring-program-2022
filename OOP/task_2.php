<?php

class Person
{

    public function __construct(public string $first_name, public string $last_name)
    {
    }

    public function get_full_name(): string
    {
        return sprintf("%s %s", $this->first_name, $this->last_name);
    }
}

$person = new Person('Vasia', 'Pupkin');
$person_name = $person->get_full_name();

echo PHP_EOL;
echo $person_name . PHP_EOL;


$person->first_name = 'Arnold';
$person->last_name = 'Schwarzenegger';
$person_name = $person->get_full_name();

echo $person_name . PHP_EOL;