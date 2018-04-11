<?php

class Pikachu extends Pokemon
{
	public function __construct($name){
        $this->name = $name;
        $this->energyType = new EnergyType("Lightning");
        $this->hitpoints = 60;
        $this->weakness = new Weakness(new EnergyType("Fire"), 1.5);
        $this->resistance = new Resistance(new EnergyType("Fighting"), 20);
        $this->attacks = [new Attack("Pika Punch", 20),new Attack("Electric Ring" , 50) ];
	}
}