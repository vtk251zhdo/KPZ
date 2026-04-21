<?php

class Warrior implements HeroInterface
{
    public function getDescription(): string
    {
        return "Воїн";
    }
    public function getStats(): int
    {
        return 100;
    }
}