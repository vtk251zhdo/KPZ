<?php

class SwordDecorator extends InventoryDecorator
{
    public function getDescription(): string
    {
        return parent::getDescription() . " + Сталевий меч";
    }

    public function getStats(): int
    {
        return parent::getStats() + 25;
    }
}