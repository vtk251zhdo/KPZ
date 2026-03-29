<?php

class XiaomiEBook implements EBookInterface
{
    public function getBrand(): string
    {
        return 'Xiaomi';
    }

    public function getModel(): string
    {
        return 'Xiaomi ReadGo';
    }

    public function getSpecs(): string
    {
        return '6-inch E-Ink, Wi-Fi, 16GB storage';
    }
}