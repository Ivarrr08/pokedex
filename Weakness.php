<?php

class Weakness
{
	public $EnergyType;
	public $multiplier;

	public function __construct($myEnergyType, $myMultiplier)
    {
        $this->EnergyType = $myEnergyType;
        $this->multiplier = $myMultiplier;
    }
}	