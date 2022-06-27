<?php

interface CanFly
{
    public function fly();
}

interface CanSwim
{
    public function swim();
}

interface CanClimb
{
    public function climb();
}

interface CanGreet
{
    public function greet($name);
}

interface CanIntroduce
{
    public function speak();

    public function introduce();
}

interface CanSpeak
{
    public function speak();
}

class Bird implements CanFly
{
    public function __construct(public string $name)
    {
    }

    public function fly()
    {
        return "I am flying";
    }

    public function chirp()
    {
        return "Chirp chirp";
    }
}

class Duck extends Bird implements CanSwim
{

    public function fly()
    {
        return "I am flying";
    }

    public function chirp()
    {
        return "Quack quack";
    }

    public function swim()
    {
        return "Splash! I'm swimming";
    }
}

class Cat implements CanClimb
{
    public function meow()
    {
        return "Meow meow";
    }


    public function play($name)
    {
        return sprintf("Hey %s, let's play!", $name);
    }

    public function climb()
    {
        return "Look, I'm climbing a tree";
    }
}


class Dog implements CanSwim, CanGreet
{
    public function bark()
    {
        return "Woof woof";
    }

    public function greet($name)
    {
        return sprintf("Hey %s, welcome to my home!", $name);
    }

    public function swim()
    {
        return "I'm swimming, woof woof";
    }

}

class Person implements CanGreet, CanIntroduce
{

    public function __construct(public string $name, public int $age, public string $occupation)
    {
    }

    public function greet($name)
    {
        return sprintf("Hey %s, how are you?", $name);
    }

    public function speak()
    {
        return "What am I supposed to say again?";
    }

    public function introduce()
    {
        return sprintf("Hello, my name is %s, I am %d years old and I am currently working as a(n) %s",
            $this->name,
            $this->age,
            $this->occupation
        );
    }

}
