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

    public function describe_job()
    {
        return sprintf("I am currently working as a(n) %s", $this->occupation);
    }

    public static function greet_extraterrestrials($species)
    {
        return sprintf("Welcome to Planet Earth %s!", $species);
    }

}

class Salesman extends Person
{

    public function __construct(public string $name, public int $age)
    {
        parent::__construct($name, $age, 'Salesman');
    }

    public function introduce()
    {
        return parent::introduce() . ",  don't forget to check out my products!";
    }

}

class ComputerProgrammer extends Person
{

    public function __construct(public string $name, public int $age, public string $occupation = 'Computer Programmer')
    {
        parent::__construct($name, $age, $occupation);
    }

    public function describe_job()
    {
        return parent::describe_job() . ", don't forget to check out my Codewars account ;)";
    }

}

class WebDeveloper extends ComputerProgrammer
{

    public function __construct(public string $name, public int $age)
    {
        parent::__construct($name, $age, "Web Developer");
    }

    public function introduce()
    {
        return sprintf("Hello, my name is %s", $this->name);
    }

    public function describe_job()
    {
        return parent::describe_job() . "And don't forget to check on my website :D";
    }

    public function describe_website ()
    {
        return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
    }

}

