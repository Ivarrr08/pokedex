<?php

require 'Pokemon.php';

$pikachu = new Pokemon('Pikachu', 'Electric', 60, 60, 'Pika Punch', 'Water', 'Ground');
$charmeleon = new Pokemon('Charmeleon', 'Fire', 60, 60, 'Head Butt', 'Water', 'Grass');

print_r('<pre>' . $pikachu . '</pre>');
//print_r('<pre>' . $charmeleon . '</pre>');