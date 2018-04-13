<?php

class EnergyType
{
	public $energyType;

	public function __construct($EnergyType)
    {
        $this->energyType = $EnergyType;
    }

    /**
     * @return mixed
     */
    public function getEnergyType()
    {
        return $this->energyType;
    }

    /**
     * @param mixed $energyType
     */
    public function setEnergyType($energyType)
    {
        $this->energyType = $energyType;
    }


}