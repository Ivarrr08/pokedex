<?php

class Charmeleon extends Pokemon
{
    public function __construct($name){
        $this->name = $name;
        $this->energyType = new EnergyType("Fire");
        $this->hitpoints = 60;
        $this->weakness = new Weakness(new EnergyType("water"), 2);
        $this->resistance = new Resistance(new EnergyType("Electric"), 10);
        $this->attacks = [new Attack("Flare", 30), new Attack("headbutt", 10)];
    }
}