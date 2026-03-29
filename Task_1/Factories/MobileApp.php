<?php

class MobileApp implements SubscriptionFactoryInterface
{
    public function createSubscription(string $type): Subscription
    {
        echo "Оформлення через MobileApp..." . PHP_EOL;
        echo "Авторизація в мобільному застосунку." . PHP_EOL;

        $subscription = $this->buildSubscription($type);

        $subscription->addFeature("7 днів пробного доступу");
        $subscription->addFeature("Push-сповіщення про нові канали");

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