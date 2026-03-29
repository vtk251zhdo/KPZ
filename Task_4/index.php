<?php

require_once 'Virus.php';

echo "Створення сімейства вірусів" . PHP_EOL;

$grandParent = new Virus(1.5, 10, 'Alpha', 'Corona');

$parent1 = new Virus(1.2, 6, 'Beta', 'Corona');
$parent2 = new Virus(1.1, 5, 'Gamma', 'Corona');

$child1 = new Virus(0.6, 2, 'Delta', 'Corona');
$child2 = new Virus(0.5, 1, 'Epsilon', 'Corona');
$child3 = new Virus(0.4, 1, 'Zeta', 'Corona');

$parent1->addChild($child1);
$parent1->addChild($child2);
$parent2->addChild($child3);

$grandParent->addChild($parent1);
$grandParent->addChild($parent2);

echo PHP_EOL . "Оригінальне сімейство:" . PHP_EOL;
$grandParent->printFamilyTree();

$clonedFamily = clone $grandParent;

echo PHP_EOL . "Клоноване сімейство:" . PHP_EOL;
$clonedFamily->printFamilyTree();

echo PHP_EOL . "Перевірка клонування" . PHP_EOL;

if ($grandParent !== $clonedFamily) {
    echo "Батьківський вірус успішно клоновано!" . PHP_EOL;
} else {
    echo "Помилка: Батьківський вірус не був клонований!" . PHP_EOL;
}

$originalChildren = $grandParent->getChildren();
$clonedChildren   = $clonedFamily->getChildren();

if ($originalChildren[0] !== $clonedChildren[0]) {
    echo "Діти також були клоновані!" . PHP_EOL;
} else {
    echo "Помилка: Діти не були клоновані!" . PHP_EOL;
}
