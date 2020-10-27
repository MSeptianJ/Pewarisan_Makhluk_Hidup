<?php
    include_once "Plant.php";

class Vegetable extends Plant
{
    public function __construct($name, $environment, $seedType, $rootType, $leaveShape)
    {
        parent::__construct($name, $environment, $seedType, $rootType, $leaveShape);
    }

    public function description() {
        echo "Tanaman ini merupakan sebauh sayuran yang hidup di ". $this->getEnvironment();
        echo ". jenis biji yang dimilikinya adalah ". $this->getSeedType() ."<br>";
        echo "Karena memiliki jenis biji ". $this->getSeedType() .", tanaman ini memiliki akar ". $this->getRootType() . "<br>";
        echo "dan bentuk daun ". $this->getLeaveShape() ."<br>";
    }
}