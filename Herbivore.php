<?php
    include_once "Animal.php";

class Herbivore extends Animal
{
    var $food;

    public function __construct($name, $environment, $birthMethod, $breathOrgan, $walkMethod, $foodType, $food)
    {
        parent::__construct($name, $environment, $birthMethod, $breathOrgan, $walkMethod, $foodType);
        $this->food = $food;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function description() {
        echo "Hidupnya di ". $this->getEnvironment();
        echo ", dia berkembang biak dengan cara ". $this->getBirthMethod() . "<br>";
        echo "Untuk bernafas, dia menggunakan ". $this->getBreathOrgan() . "<br>";
        echo " dia berjalan menggunakan". $this->getWalkMethod() . "<br>";
    }
}