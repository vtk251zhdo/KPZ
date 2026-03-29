<?php

class GalaxySmartphone implements SmartphoneInterface
{
    public function getBrand(): string
    {
        return 'Galaxy';
    }

    public function getModel(): string
    {
        return 'Galaxy S';
    }

    public function getSpecs(): string
    {
        return 'Dynamic AMOLED, 256GB, 5G support';
    }
}