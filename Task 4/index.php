<?php

require_once "autoload.php";

$realReader = new SmartTextReader();

$checkerProxy = new SmartTextChecker($realReader);

$lockerProxy = new SmartTextReaderLocker($checkerProxy, '/2/');

echo "=== ТЕСТ 1: Доступ до File2.txt (Заблоковано) ===\n";
$lockerProxy->readText("File2.txt");

echo "\n=== ТЕСТ 2: Доступ до File1.txt (Дозволено) ===\n";
$lockerProxy->readText("File1.txt");