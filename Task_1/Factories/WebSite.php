<?php

class WebSite implements SubscriptionFactoryInterface
{
    public function createSubscription(string $type): Subscription
    {
        echo "Оформлення через WebSite..." . PHP_EOL;
        echo "Автоматична реєстрація та онлайн-оплата." . PHP_EOL;

        $subscription = $this->buildSubscription($type);

        $subscription->addFeature("Промокод WEB-BONUS");
        $subscription->addFeature("Особистий кабінет на сайті");

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