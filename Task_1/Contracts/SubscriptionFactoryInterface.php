<?php

interface SubscriptionFactoryInterface
{
    public function createSubscription(string $type): Subscription;
}