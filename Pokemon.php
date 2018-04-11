<?php

class Pokemon {
 	public $name;
 	public $energyType;
 	public $hitpoints;
 	private $health;
 	public $attacks;
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
            return $target->defend($this->name, $this->attacks[$attack]->damage, $this->attacks[$attack]->Attack, $this->energyType);

        }

        public function defendFromAttack($name, $damage, $AttackName, $EnergyType){

            if($EnergyType == $this->weakness->EnergyType) {
                $damage = $damage * $this->weakness->value;

            } elseif($EnergyType == $this->resistance->EnergyType) {
                $damage = $damage - $this->resistance->value;

            }
            $this->health = $this->health-$damage;
            return $name . ' attacked ' . $this->name . ' with ' . $AttackName . ' doing ' . $damage . ' damage <br>';
        }


}