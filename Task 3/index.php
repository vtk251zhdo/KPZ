<?php

require_once "autoload.php";

$button = new LightElementNode("button", "inline", false, ["btn", "btn-primary"]);
$button->addChild(new LightTextNode("Натисни мене"));

$input = new LightElementNode("input", "inline", true, ["form-control"]);

$logger = new LoggerListener();
$analytics = new AnalyticsListener();

$button->addEventListener("click", $logger);
$button->addEventListener("click", $analytics);

$button->addEventListener("mouseover", $logger);

$input->addEventListener("focus", $logger);

echo "--- Testing Button Events ---\n";
$button->triggerEvent("click");     
echo "\n";
$button->triggerEvent("mouseover");  
echo "\n";

echo "--- Testing Input Events ---\n";
$input->triggerEvent("focus");    
$input->triggerEvent("blur");       

echo "\n--- Final HTML ---\n";
echo $button->outerHTML();