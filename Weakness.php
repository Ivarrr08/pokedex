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