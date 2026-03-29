<?php

class EducationalSubscription extends Subscription
{
    public function __construct()
    {
        parent::__construct(
            79.00,
            3,
            ["Discovery", "National Geographic", "History", "Science TV"],
            ["Освітні канали", "Доступ до архіву лекцій"]
        );
    }

    public function getName(): string
    {
        return "Educational Subscription";
    }
}