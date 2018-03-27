<?php

class Pokemon {
 	public $name;
 	public $energyType;
 	public hitpoints;
 	private $health;
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


 	public function attackOpponent($target, $attack) {
 		//hier kan je alles opvragen van attack en target
        $target->defend($this->energyType, $attack);
    }
    public function defendFromAttack($attack) {

    }

}