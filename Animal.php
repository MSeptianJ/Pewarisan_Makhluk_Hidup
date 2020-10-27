<?php
    include_once "LivingBeings.php";

class Animal extends LivingBeings
{
    var $breathOrgan;
    var $birthMethod;
    var $walkMethod;
    var $foodType;

    public function __construct($name, $environment, $birthMethod, $breathOrgan, $walkMethod, $foodType)
    {
        parent::__construct($name, $environment);
        $this->breathOrgan = $breathOrgan;
        $this->birthMethod = $birthMethod;
        $this->walkMethod = $walkMethod;
        $this->foodType = $foodType;
    }

    public function getBirthMethod()
    {
        return $this->birthMethod;
    }

    public function getBreathOrgan()
    {
        return $this->breathOrgan;
    }

    public function getWalkMethod()
    {
        return $this->walkMethod;
    }

    public function getFoodType()
    {
        return $this->foodType;
    }
}