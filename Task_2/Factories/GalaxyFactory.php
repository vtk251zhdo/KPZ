<?php

class GalaxyFactory implements DeviceFactoryInterface
{
    public function createLaptop(): LaptopInterface
    {
        return new GalaxyLaptop();
    }

    public function createNetbook(): NetbookInterface
    {
        return new GalaxyNetbook();
    }

    public function createEBook(): EBookInterface
    {
        return new GalaxyEBook();
    }

    public function createSmartphone(): SmartphoneInterface
    {
        return new GalaxySmartphone();
    }
}