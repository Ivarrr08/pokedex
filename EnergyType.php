<?php

class EnergyType
{
	public $name;
	public $type;

	public function __construct($myName, $myType)
    {
        $this->name = $myName;
        $this->type = $myType;
    }
}