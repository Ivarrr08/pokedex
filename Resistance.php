<?php

class Attack
{
	public $EnergyType;
	public $value;

	public function __construct($myEnergyType, $myValue)
    {
        $this->EnergyType = $myEnergyType;
        $this->value = $myValue;
    }
}