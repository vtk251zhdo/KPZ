<?php

class IPhoneSmartphone implements SmartphoneInterface
{
    public function getBrand(): string
    {
        return 'IPhone';
    }

    public function getModel(): string
    {
        return 'IPhone X';
    }

    public function getSpecs(): string
    {
        return 'OLED, 128GB, dual camera';
    }
}