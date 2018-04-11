<?php

class Resistance
{
	public $EnergyType;
	public $value;

	public function __construct($EnergyType, $Value)
    {
        $this->EnergyType = $EnergyType;
        $this->value = $Value;
    }
}