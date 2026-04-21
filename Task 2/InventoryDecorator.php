<?php

abstract class InventoryDecorator implements HeroInterface
{
    protected HeroInterface $hero;

    public function __construct(HeroInterface $hero)
    {
        $this->hero = $hero;
    }

    public function getDescription(): string
    {
        return $this->hero->getDescription();
    }

    public function getStats(): int
    {
        return $this->hero->getStats();
    }
}