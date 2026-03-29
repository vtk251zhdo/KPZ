<?php

class DomesticSubscription extends Subscription
{
    public function __construct()
    {
        parent::__construct(
            99.00,
            1,
            ["1+1", "ICTV", "СТБ", "Новий канал"],
            ["Базові канали", "HD-якість"]
        );
    }

    public function getName(): string
    {
        return "Domestic Subscription";
    }
}