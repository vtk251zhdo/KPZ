<?php

class PremiumSubscription extends Subscription
{
    public function __construct()
    {
        parent::__construct(
            199.00,
            6,
            ["HBO", "Netflix Channel", "Fox Movies", "VIP Sport"],
            ["Усі канали", "4K", "Преміум підтримка", "Фільми без реклами"]
        );
    }

    public function getName(): string
    {
        return "Premium Subscription";
    }
}