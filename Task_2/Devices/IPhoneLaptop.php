<?php

class IPhoneLaptop implements LaptopInterface
{
    public function getBrand(): string
    {
        return 'IPhone';
    }

    public function getModel(): string
    {
        return 'IPhone Air';
    }

    public function getSpecs(): string
    {
        return '16GB RAM, 512GB SSD, Retina Display';
    }
}