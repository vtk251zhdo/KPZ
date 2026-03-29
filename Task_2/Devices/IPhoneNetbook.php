<?php

class IPhoneNetbook implements NetbookInterface
{
    public function getBrand(): string
    {
        return 'IPhone';
    }

    public function getModel(): string
    {
        return 'IPhone Mini';
    }

    public function getSpecs(): string
    {
        return '8GB RAM, 256GB SSD, 11-inch display';
    }
}