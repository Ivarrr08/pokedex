<?php

class Attack
{
	public $name;
	public $damage;

	public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param mixed $damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }


}