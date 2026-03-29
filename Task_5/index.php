<?php

require_once 'autoload.php';

$director = new CharacterDirector();

$heroBuilder = new HeroBuilder();
$enemyBuilder = new EnemyBuilder();

$hero = $director->createDreamHero($heroBuilder);
$enemy = $director->createWorstEnemy($enemyBuilder);

echo "Мій герой мрії:" . PHP_EOL;
$hero->showInfo();

echo PHP_EOL . "Мій найзапекліший ворог:" . PHP_EOL;
$enemy->showInfo();