<?php

class XiaomiSmartphone implements SmartphoneInterface
{
    public function getBrand(): string
    {
        return 'Xiaomi';
    }

    public function getModel(): string
    {
        return 'Xiaomi 14';
    }

    public function getSpecs(): string
    {
        return 'AMOLED, 256GB, triple camera';
    }
}