<?php

require_once 'autoload.php';

function showBrandDevices(DeviceFactoryInterface $factory, string $brandName): void
{
    echo "=== Пристрої бренду {$brandName} ===" . PHP_EOL;

    $laptop = $factory->createLaptop();
    echo "Laptop: " . $laptop->getModel() . " | " . $laptop->getSpecs() . PHP_EOL;

    $netbook = $factory->createNetbook();
    echo "Netbook: " . $netbook->getModel() . " | " . $netbook->getSpecs() . PHP_EOL;

    $ebook = $factory->createEBook();
    echo "EBook: " . $ebook->getModel() . " | " . $ebook->getSpecs() . PHP_EOL;

    $smartphone = $factory->createSmartphone();
    echo "Smartphone: " . $smartphone->getModel() . " | " . $smartphone->getSpecs() . PHP_EOL;

    echo str_repeat("-", 60) . PHP_EOL;
}

showBrandDevices(new IPhoneFactory(), 'IPhone');
showBrandDevices(new XiaomiFactory(), 'Xiaomi');
showBrandDevices(new GalaxyFactory(), 'Galaxy');