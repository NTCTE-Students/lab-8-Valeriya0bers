<?php

class Animal {
    public $name;
    public $age;

    public function describe() {
        print("Это {$this -> name}, ему {$this -> age} лет.<br>");
    }
}

class Dog extends Animal {
    public function bark() {
        print("{$this -> name} говорит: Гав-гав!<br>");
    }
}

class Cat extends Animal {
    public function meow() {
        print("{$this -> name} говорит: Мяу-мяу!<br>");
    }
}

$dog = new Dog();
$dog -> name = 'Бобик';
$dog -> age = 3;
$dog -> describe();
$dog -> bark();

$cat = new Cat();
$cat -> name = 'Мурка';
$cat -> age = 2;
$cat -> describe();
$cat -> meow();