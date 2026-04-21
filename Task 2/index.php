<?php

require_once "autoload.php";

echo "=== СТВОРЕННЯ ПЕРСОНАЖІВ ===\n\n";

echo "Створення базових персонажів...\n\n";

$warrior = new Warrior();
echo "Персонаж: " . $warrior->getDescription() . "\n";
echo "Сила: " . $warrior->getStats() . "\n\n";

$mage = new Mage();
echo "Персонаж: " . $mage->getDescription() . "\n";
echo "Сила: " . $mage->getStats() . "\n\n";

$palladin = new Palladin();
echo "Персонаж: " . $palladin->getDescription() . "\n";
echo "Сила: " . $palladin->getStats() . "\n\n";

echo "Декорування персонажів...\n\n";

$armoredWarrior = new SwordDecorator($warrior);
$armoredWarrior = new ArmorDecorator($armoredWarrior);

echo "Персонаж: " . $armoredWarrior->getDescription() . "\n";
echo "Загальна Сила: " . $armoredWarrior->getStats() . "\n\n";

$superMage = new Mage();
$superMage = new ArtifactDecorator($superMage);
$superMage = new ArtifactDecorator($superMage);

echo "Персонаж: " . $superMage->getDescription() . "\n";
echo "Загальна сила: " . $superMage->getStats() . "\n\n";

$superPalladin = new Palladin();
$superPalladin = new ArmorDecorator($superPalladin);
$superPalladin = new ArtifactDecorator($superPalladin);
$superPalladin = new SwordDecorator($superPalladin);

echo "Персонаж: " . $superPalladin->getDescription() . "\n";
echo "Загальна сила: " . $superPalladin->getStats() . "\n\n";