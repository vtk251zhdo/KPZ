<?php

require_once 'autoload.php';

function assertEqual($expected, $actual, string $message): void
{
    if ($expected === $actual) {
        echo "[OK] " . $message . PHP_EOL;
    } else {
        echo "[FAIL] " . $message . PHP_EOL;
        echo "  Очікувалось: ";
        var_export($expected);
        echo PHP_EOL;
        echo "  Отримано: ";
        var_export($actual);
        echo PHP_EOL;
    }
}

function assertTrue(bool $condition, string $message): void
{
    if ($condition) {
        echo "[OK] " . $message . PHP_EOL;
    } else {
        echo "[FAIL] " . $message . PHP_EOL;
    }
}

echo "--- Тестування Factory Method ---" . PHP_EOL;

$website = new WebSite();
$sub1 = $website->createSubscription('domestic');

assertEqual('Domestic Subscription', $sub1->getName(), 'WebSite створює DomesticSubscription');
assertEqual(99.00, $sub1->getMonthlyFee(), 'Ціна Domestic через WebSite правильна');
assertTrue(in_array('Промокод WEB-BONUS', $sub1->getFeatures()), 'WebSite додає промокод');

$mobile = new MobileApp();
$sub2 = $mobile->createSubscription('educational');

assertEqual('Educational Subscription', $sub2->getName(), 'MobileApp створює EducationalSubscription');
assertTrue(in_array('7 днів пробного доступу', $sub2->getFeatures()), 'MobileApp додає пробний період');

$manager = new ManagerCall();
$sub3 = $manager->createSubscription('premium');

assertEqual('Premium Subscription', $sub3->getName(), 'ManagerCall створює PremiumSubscription');
assertEqual(179.10, round($sub3->getMonthlyFee(), 2), 'ManagerCall застосовує знижку 10%');
assertTrue(in_array('Персональна консультація менеджера', $sub3->getFeatures()), 'ManagerCall додає консультацію');

try {
    $website->createSubscription('invalid_type');
    echo "[FAIL] Невалідний тип мав викликати виняток" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "[OK] Невалідний тип викликає виняток" . PHP_EOL;
}

echo "--- Тестування завершено ---" . PHP_EOL;