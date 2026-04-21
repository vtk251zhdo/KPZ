<?php

class ArmorDecorator extends InventoryDecorator
{
    public function getDescription(): string
    {
        return parent::getDescription() . " + Важка броня";
    }

    public function getStats(): int
    {
        return parent::getStats() + 50;
    }
}