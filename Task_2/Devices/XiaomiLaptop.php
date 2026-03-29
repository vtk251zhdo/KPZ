<?php

class XiaomiLaptop implements LaptopInterface
{
    public function getBrand(): string
    {
        return 'Xiaomi';
    }

    public function getModel(): string
    {
        return 'Xiaomi NoteBook Pro';
    }

    public function getSpecs(): string
    {
        return '16GB RAM, 1TB SSD, IPS display';
    }
}