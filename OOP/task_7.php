<?php

class Person
{
    const SPECIES = "Homo Sapiens";

    public function __construct(public string $name, public int $age, public string $occupation)
    {
    }

    public function introduce()
    {
        return sprintf("Hello, my name is %s", $this->name);
    }

    final public function describe_job()
    {
        return sprintf("I am currently working as a(n) %s", $this->occupation);
    }

    final public static function greet_extraterrestrials($species)
    {
        return sprintf("Welcome to Planet Earth %s!", $species);
    }
}

class ComputerProgrammer extends Person
{

    public function __construct(public string $name, public int $age, public string $occupation = 'Computer Programmer')
    {
        parent::__construct($name, $age, $occupation);
    }

    public function introduce()
    {
        return parent::introduce() . sprintf(" and I am a %s", $this->occupation);
    }

}