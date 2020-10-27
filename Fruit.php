<?php
    include_once "Plant.php";

class Fruit extends Plant
{
    var $taste;

    public function __construct($name, $environment, $seedType, $rootType, $leaveShape, $taste)
    {
        parent::__construct($name, $environment, $seedType, $rootType, $leaveShape);
        $this->taste = $taste;
    }

    public function getTaste()
    {
        return $this->taste;
    }

    public function description() {
        echo "Tanaman ini hidup di ". $this->getEnvironment() ;
        echo " dan memiliki jenis biji ". $this->getSeedType() ."<br>";
        echo "karena itu, tanaman ini memiliki akar ". $this->getRootType();
        echo " dan bentuk daun ". $this->getLeaveShape() ."<br>";
        echo " Tanaman ini menghasilkan buah yang berasa ". $this->getTaste() ."<br>";
    }
}