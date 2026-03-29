<?php

class XiaomiNetbook implements NetbookInterface
{
    public function getBrand(): string
    {
        return 'Xiaomi';
    }

    public function getModel(): string
    {
        return 'Xiaomi LiteBook';
    }

    public function getSpecs(): string
    {
        return '8GB RAM, 256GB SSD, compact design';
    }
}