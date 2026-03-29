<?php

class GalaxyNetbook implements NetbookInterface
{
    public function getBrand(): string
    {
        return 'Galaxy';
    }

    public function getModel(): string
    {
        return 'Galaxy Compact';
    }

    public function getSpecs(): string
    {
        return '8GB RAM, 128GB SSD, lightweight';
    }
}