<?php

class Mage implements HeroInterface
{
    public function getDescription(): string
    {
        return "Маг";
    }
    public function getStats(): int
    {
        return 80;
    }
}