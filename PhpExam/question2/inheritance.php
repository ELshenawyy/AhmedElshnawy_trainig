<?php

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function toString()
    {
        return "Animal: Animal[name='{$this->name}']";
    }
}

class Mammal extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function toString()
    {
        return "Mammal: {$this->toString()}";
    }
}

class Cat extends Mammal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greets()
    {
        echo "Meow\n";
    }

    public function toString()
    {
        return "Cat: {$this->toString()}";
    }
}

class Dog extends Mammal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greets()
    {
        echo "Woof\n";
    }

    public function greetsAnother(Dog $another)
    {
        echo "Woooof\n";
    }

    public function toString()
    {
        return "Dog: {$this->toString()}";
    }
}

// Example usage:
$animal = new Animal("?");
echo $animal->toString() . "\n";

$mammal = new Mammal("?");
echo $mammal->toString() . "\n";

$cat = new Cat("?");
echo $cat->toString() . "\n";
$cat->greets();

$dog = new Dog("?");
echo $dog->toString() . "\n";
$dog->greets();
$dog->greetsAnother(new Dog("?"));
