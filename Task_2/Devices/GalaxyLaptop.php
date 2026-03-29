<?php

class GalaxyLaptop implements LaptopInterface
{
    public function getBrand(): string
    {
        return 'Galaxy';
    }

    public function getModel(): string
    {
        return 'Galaxy Book';
    }

    public function getSpecs(): string
    {
        return '12GB RAM, 512GB SSD, Full HD';
    }
}