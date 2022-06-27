<?php

class Person
{

    public function __construct(protected string $name, protected int $age, protected string $occupation)
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException('Name must be a string!');
        }

        if ($age <= 0) {
            throw new InvalidArgumentException('Age must be a non-negative integer!');
        }

        if (!is_string($occupation)) {
            throw new InvalidArgumentException('Occupation must be a string!');
        }
    }


    public function get_name(): string
    {
        return $this->name;
    }

    public function get_age(): int
    {
        return $this->age;
    }

    public function get_occupation(): string
    {
        return $this->occupation;
    }

    public function set_name($name): self
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException('Name must be a string!');
        }

        $this->name = $name;

        return $this;
    }

    public function set_age($age): self
    {
        if ($age <= 0) {
            throw new InvalidArgumentException('Age must be a non-negative integer!');
        }

        $this->age = $age;

        return $this;
    }

    public function set_occupation($occupation): self
    {
        if (!is_string($occupation)) {
            throw new InvalidArgumentException('Occupation must be a string!');
        }

        $this->occupation = $occupation;

        return $this;
    }

}
