<?php

require_once "autoload.php";

$atc = new CommandCentre();

$runway = new Runway();
$atc->addRunway($runway);

$boeing = new Aircraft("Boeing-747", $atc);
$airbus = new Aircraft("Airbus-A320", $atc);

echo "--- Scenario 1: First plane landing ---\n";
$boeing->land();

echo "\n--- Scenario 2: Second plane tries to land ---\n";
$airbus->land(); 

echo "\n--- Scenario 3: First plane takes off ---\n";
$boeing->takeOff();

echo "\n--- Scenario 4: Second plane tries to land again ---\n";
$airbus->land(); 