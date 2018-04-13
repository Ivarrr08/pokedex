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

    public function weaknessCheck($pokemon, $target){
        if ($pokemon->energyType->getEnergyType() === $target->weakness->getEnergyType()->getEnergyType()) {
            return true;
        }
        return false;
    }

    public function resistanceCheck($pokemon, $target) {
        if ($pokemon->type->getEnergyType() === $target->weakness->getEnergyType()->getEnergyType()) {
            return true;
        }
        return false;
    }

    public function attackOpponent($target, $attack){
 	    print($target->name . "Hitpoints:" . $this->health);

        if ($this->weaknessCheck($this, $target) == true) {
            $dmg = $attack->getDamage() * $target->weakness->getWeaknessMultiplier();
            $result = $target->hitpoints - $dmg;
            print_r($this->name . " attacks " . $target->name . " with " . $attack->getName() . " " . $target->name . " loses " . $dmg . " HP");
            return print("\n" . "$target->name new HP = " . $result);
        }
        if ($this->resistanceChecker($this, $target) == true) {
            $dmg = $attack->getDamage() - $target->getResistvalue();
            $result = $target->hitpoints - $dmg;
            print_r($this->name . " attacks " . $target->name . " with " . $attack->getName() . " " . $target->name . " loses " . $dmg . " HP");
            return print("\n" . "$target->name new HP = " . $result);
        }
        $dmg = $attack->getDamage();
        $result = $target->hitpoints - $dmg;
        print_r($this->name . " attacks " . $target->name . " with " . $attack->getName() . " " . $target->name . " loses " . $dmg . " HP");
        return print("\n" . "$target->name new HP = " . $result);
    }

    public function __toString() {
        return json_encode($this);
    }


}