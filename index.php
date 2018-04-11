<?php

require 'Pokemon.php';
require 'EnergyType.php';
require 'Weakness.php';
require 'Resistance.php';
require 'Attack.php';
require 'Pikachu.php';
require 'Charmeleon.php';

$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

$pikachu->attackOpponent($pikachu->attacks[1], $charmeleon);
echo"\n";
$charmeleon->attackOpponent($charmeleon->attacks[0], $pikachu);

