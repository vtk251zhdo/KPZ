<?php

class IPhoneEBook implements EBookInterface
{
    public function getBrand(): string
    {
        return 'IPhone';
    }

    public function getModel(): string
    {
        return 'IPhone Reader';
    }

    public function getSpecs(): string
    {
        return '7-inch E-Ink, 32GB storage, backlight';
    }
}