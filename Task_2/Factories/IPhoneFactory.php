<?php

class IPhoneFactory implements DeviceFactoryInterface
{
    public function createLaptop(): LaptopInterface
    {
        return new IPhoneLaptop();
    }

    public function createNetbook(): NetbookInterface
    {
        return new IPhoneNetbook();
    }

    public function createEBook(): EBookInterface
    {
        return new IPhoneEBook();
    }

    public function createSmartphone(): SmartphoneInterface
    {
        return new IPhoneSmartphone();
    }
}