<?php


class Person
{

    public function __construct(public string $name, public int $age, public string $gender)
    {
    }

}

$object_oriented_php = new class() {
    public $author;
    public string $description = "An amazing PHP Kata Series, complete with 10 top-quality Kata containing a large number of both fixed and random tests, that teaches both the fundamentals of object-oriented programming in PHP (in the first 7 Kata of this Series) and more advanced OOP topics in PHP (in the last 3 Kata of this Series) such as interfaces, abstract classes and even anonymous classes in a way that stimulates critical thinking and encourages independent research";
    public int $kata_count = 10;
    public array $kata_list = [
        1 => "Object-Oriented PHP #1 - Classes, Public Properties and Methods",
        2 => "Object-Oriented PHP #2 - Class Constructors and \$this",
        3 => "Object-Oriented PHP #3 - Class Constants and Static Methods",
        4 => "Object-Oriented PHP #4 - People, people, people (Practice)",
        5 => "Object-Oriented PHP #5 - Classical Inheritance",
        6 => "Object-Oriented PHP #6 - Visibility",
        7 => "Object-Oriented PHP #7 - The \"Final\" Keyword",
        8 => "Object-Oriented PHP #8 - Interfaces [Advanced]",
        9 => "Object-Oriented PHP #9 - Abstract Classes [Advanced]",
        10 => "Object-Oriented PHP #10 - Objects on the Fly [Advanced]",
    ];

    public function __construct()
    {
        $this->author = new class("Donald", 17, 'Male') extends Person {
            public function __construct(
                public string $name,
                public int $age,
                public string $gender,
                public string $occupation = "Computer Programmer"
            ) {
                parent::__construct($name, $age, $gender);
            }

            public function __toString()
            {
                return sprintf(
                    "%s, aged %d, who is a computer programmer proficient in Javascript and PHP and is a PHP enthusiast",
                    $this->name,
                    $this->age
                );
            }
        };
    }

    public function advertise($name)
    {
        return sprintf(
            "Hey %s, don't forget to check out this great PHP Kata Series authored by Donald called \"Object-Oriented PHP\"",
            $name
        );
    }

    public function get_kata_by_number($kata_number)
    {
        if ($kata_number < 1 || $kata_number > 10) {
            throw new InvalidArgumentException("Number is not an integer in the range of 1 to 10(both inclusive)!");
        }
        return $this->kata_list[$kata_number];
    }

    public function complete()
    {
        return "Hooray, I've finally completed the entire \"Object-Oriented PHP\" Kata Series!!!";
    }

    public function __toString()
    {
        return $this->description;
    }

};
