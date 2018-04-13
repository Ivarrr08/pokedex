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

    /**
     * @return mixed
     */
    public function getEnergyType()
    {
        return $this->EnergyType;
    }

    /**
     * @param mixed $EnergyType
     */
    public function setEnergyType($EnergyType)
    {
        $this->EnergyType = $EnergyType;
    }


}