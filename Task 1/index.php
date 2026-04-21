<?php
require_once "autoload.php";

$technical = new TechnicalSupport();
$billing = new BillingSupport();
$tariff = new TariffSupport();
$operator = new OperatorSupport();

$technical->setNext($billing)->setNext($tariff)->setNext($operator);

$isHandled = false;

echo "=== ВІТАЄМО У СЛУЖБІ ПІДТРИМКИ ===\n";

while (!$isHandled) {
    echo "\nОберіть категорію вашого питання:\n";
    echo "1. Технічні проблеми з інтернетом\n";
    echo "2. Питання щодо оплати та рахунків\n";
    echo "3. Зміна тарифного плану\n";
    echo "4. З'єднати з оператором\n";
    echo "0. Вийти\n";
    echo "Ваш вибір: ";

    $input = trim(fgets(STDIN));
    $choice = (int) $input;

    if ($choice === 0) {
        echo "Дякуємо за звернення. До побачення!\n";
        break;
    }

    $isHandled = $technical->handle($choice);

    if (!$isHandled) {
        echo "!!! Невірний вибір. Спробуйте ще раз !!!\n";
    }
}