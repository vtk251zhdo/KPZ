<?php

class ManagerCall implements SubscriptionFactoryInterface
{
    public function createSubscription(string $type): Subscription
    {
        echo "Оформлення через ManagerCall..." . PHP_EOL;
        echo "Менеджер консультує клієнта та допомагає вибрати пакет." . PHP_EOL;

        $subscription = $this->buildSubscription($type);

        $discountedPrice = $subscription->getMonthlyFee() * 0.90;
        $subscription->setMonthlyFee($discountedPrice);
        $subscription->addFeature("Персональна консультація менеджера");
        $subscription->addFeature("Знижка 10% на перший місяць");

        return $subscription;
    }

    private function buildSubscription(string $type): Subscription
    {
        return match (strtolower($type)) {
            'domestic' => new DomesticSubscription(),
            'educational' => new EducationalSubscription(),
            'premium' => new PremiumSubscription(),
            default => throw new InvalidArgumentException("Невідомий тип підписки: {$type}")
        };
    }
}