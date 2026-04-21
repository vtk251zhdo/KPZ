<?php

class ArtifactDecorator extends InventoryDecorator
{
    public function getDescription(): string
    {
        return parent::getDescription() . " + Магічний амулет";
    }

    public function getStats(): int
    {
        return parent::getStats() + 15;
    }
}