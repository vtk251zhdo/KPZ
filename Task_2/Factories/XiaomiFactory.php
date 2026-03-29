<?php

class XiaomiFactory implements DeviceFactoryInterface
{
    public function createLaptop(): LaptopInterface
    {
        return new XiaomiLaptop();
    }

    public function createNetbook(): NetbookInterface
    {
        return new XiaomiNetbook();
    }

    public function createEBook(): EBookInterface
    {
        return new XiaomiEBook();
    }

    public function createSmartphone(): SmartphoneInterface
    {
        return new XiaomiSmartphone();
    }
}