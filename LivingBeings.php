<?php


class LivingBeings
{
    var $name;
    var $environment;

    public function __construct($name, $environment) {
        $this->name = $name;
        $this->environment = $environment;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEnvironment()
    {
        return $this->environment;
    }
}