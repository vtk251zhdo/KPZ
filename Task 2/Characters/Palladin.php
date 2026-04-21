<?php

class Palladin implements HeroInterface
{
    public function getDescription(): string
    {
        return "Паладин";
    }

    public function getStats(): int
    {
        return 120;
    }
}