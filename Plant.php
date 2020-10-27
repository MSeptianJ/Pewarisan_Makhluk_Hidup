<?php
    include_once "LivingBeings.php";

class Plant extends LivingBeings
{
    var $seedType;
    var $rootType;
    var $leaveShape;

    public function __construct($name, $environment, $seedType, $rootType, $leaveShape)
    {
        parent::__construct($name, $environment);
        $this->seedType = $seedType;
        $this->rootType = $rootType;
        $this->leaveShape = $leaveShape;
    }

    public function getSeedType()
    {
        return $this->seedType;
    }

    public function getRootType()
    {
        return $this->rootType;
    }

    public function getLeaveShape()
    {
        return $this->leaveShape;
    }
}