<?php

class Pokemon {
 	public $name;
 	public $energyType;
 	public $hitpoints;
 	public $health;
 	public $attacks = array();
 	public $weakness;
 	public $resistance;

 	public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance)
 	{
 		$this->name = $name;
 		$this->energyType = $energyType;
 		$this->hitpoints = $hitpoints;
		$this->health = $health;
 		$this->attacks = $attacks;
 		$this->weakness = $weakness;
 		$this->resistance = $resistance;
 	}

 	    public function __toString() {
        return json_encode($this);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

    /**
     * @return mixed
     */
    public function getHitpoints()
    {
        return $this->hitpoints;
    }

    /**
     * @param mixed $hitpoints
     */
    public function setHitpoints($hitpoints)
    {
        $this->hitpoints = $hitpoints;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param mixed $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    /**
     * @return array
     */
    public function getAttacks()
    {
        return $this->attacks;
    }

    /**
     * @param array $attacks
     */
    public function setAttacks($attacks)
    {
        $this->attacks = $attacks;
    }

    /**
     * @return mixed
     */
    public function getWeakness()
    {
        return $this->weakness;
    }

    /**
     * @param mixed $weakness
     */
    public function setWeakness($weakness)
    {
        $this->weakness = $weakness;
    }

    /**
     * @return mixed
     */
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * @param mixed $resistance
     */
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
    }

}