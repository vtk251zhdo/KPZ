<?php

require_once 'autoload.php';

function assertEqual($expected, $actual, string $message): void
{
    if ($expected === $actual) {
        echo "[OK] {$message}" . PHP_EOL;
    } else {
        echo "[FAIL] {$message}" . PHP_EOL;
        echo "  Очікувалось: ";
        var_export($expected);
        echo PHP_EOL;
        echo "  Отримано: ";
        var_export($actual);
        echo PHP_EOL;
    }
}

echo "=== Тестування Abstract Factory ===" . PHP_EOL;

$iphoneFactory = new IPhoneFactory();
assertEqual('IPhone', $iphoneFactory->createLaptop()->getBrand(), 'IPhoneFactory створює IPhone laptop');
assertEqual('IPhone X', $iphoneFactory->createSmartphone()->getModel(), 'IPhoneFactory створює правильний smartphone');

$xiaomiFactory = new XiaomiFactory();
assertEqual('Xiaomi', $xiaomiFactory->createNetbook()->getBrand(), 'XiaomiFactory створює Xiaomi netbook');
assertEqual('Xiaomi ReadGo', $xiaomiFactory->createEBook()->getModel(), 'XiaomiFactory створює правильний ebook');

$galaxyFactory = new GalaxyFactory();
assertEqual('Galaxy', $galaxyFactory->createLaptop()->getBrand(), 'GalaxyFactory створює Galaxy laptop');
assertEqual('Galaxy S', $galaxyFactory->createSmartphone()->getModel(), 'GalaxyFactory створює правильний smartphone');

echo "=== Тестування завершено ===" . PHP_EOL;