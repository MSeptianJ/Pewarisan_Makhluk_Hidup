<?php
    include_once "Animal.php";

class Carnivore extends Animal
{
    var $huntingStyle;

    public function __construct($name, $environment, $birthMethod, $breathOrgan, $walkMethod, $foodType, $huntingStyle)
    {
        parent::__construct($name, $environment, $birthMethod, $breathOrgan, $walkMethod, $foodType);
        $this->huntingStyle = $huntingStyle;
    }

    public function getHuntingStyle()
    {
        return $this->huntingStyle;
    }

    public function description() {
        echo "Hidupnya di ". $this->getEnvironment();
        echo ", dia berkembang biak dengan cara ". $this->getBirthMethod() . "<br>";
        echo "Untuk bernafas, dia menggunakan ". $this->getBreathOrgan() . "<br>";
        echo "Jika mencari makan dia  ". $this->getHuntingStyle() . " mangsanya";
        echo " dan berjalan menggunakan ". $this->getWalkMethod() . "<br>";
    }
}