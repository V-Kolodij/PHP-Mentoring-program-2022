<?php

abstract class Person
{

    public function __construct(public string $name, public int $age, public string $gender)
    {
    }

    abstract public function introduce();

    public function greet($name)
    {
        return sprintf("Hello %s", $name);
    }

}

class Child extends Person
{

    public function __construct(
        public string $name,
        public int $age,
        public string $gender,
        public array $aspirations = []
    ) {
        parent::__construct($name, $age, $gender);
    }

    public function introduce()
    {
        return sprintf("Hi, I'm %s and I am %d years old", $this->name, $this->age);
    }

    public function greet($name)
    {
        return parent::greet($name) . ", let's play!";
    }

    public function say_dreams()
    {
        return sprintf("I would like to be a(n) %s when I grow up.", $this->sayList());
    }

    private function sayList()
    {
        $countArr = count($this->aspirations);
        $aspirationsList = '';
        $space = ' ';
        if ($countArr == 1) {
            return $this->aspirations[0];
        }

        foreach ($this->aspirations as $key => $aspiration) {
            $sep = $key == ($countArr - 2) ? $space . 'or' : ',';

            if ($key == ($countArr - 1)) {
                $aspirationsList .= $aspiration;
            } else {
                $aspirationsList .= $aspiration . $sep . $space;
            }
        }
        return $aspirationsList;
    }

}

class ComputerProgrammer extends Person
{

    public function __construct(
        $name,
        $age,
        $gender,
        public string $occupation = "Computer Programmer"
    ) {
        parent::__construct($name, $age, $gender);
    }

    public function introduce()
    {
        return sprintf(
            "Hello, my name is %s, I am %d years old and I am a(n) %s",
            $this->name,
            $this->age,
            $this->occupation
        );
    }

    public function greet($name)
    {
        return parent::greet($name) . sprintf(", I'm %s, nice to meet you", $this->name);
    }

    public function advertise()
    {
        return "Don't forget to check out my coding projects";
    }
}
