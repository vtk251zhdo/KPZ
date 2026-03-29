<?php

require_once 'autoload.php';

try {
    $websiteFactory = new WebSite();
    $mobileFactory = new MobileApp();
    $managerFactory = new ManagerCall();

    $subscription1 = $websiteFactory->createSubscription('domestic');
    $subscription1->showInfo();

    $subscription2 = $mobileFactory->createSubscription('educational');
    $subscription2->showInfo();

    $subscription3 = $managerFactory->createSubscription('premium');
    $subscription3->showInfo();

} catch (InvalidArgumentException $e) {
    echo "Помилка: " . $e->getMessage() . PHP_EOL;
} catch (Exception $e) {
    echo "Загальна помилка: " . $e->getMessage() . PHP_EOL;
}