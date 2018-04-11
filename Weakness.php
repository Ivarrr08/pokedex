<?php

class Weakness
{
	public $EnergyType;
	public $multiplier;

	public function __construct($EnergyType, $Multiplier)
    {
        $this->EnergyType = $EnergyType;
        $this->multiplier = $Multiplier;
    }
}	