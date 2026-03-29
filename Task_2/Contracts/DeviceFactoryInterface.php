<?php

interface DeviceFactoryInterface
{
    public function createLaptop(): LaptopInterface;
    public function createNetbook(): NetbookInterface;
    public function createEBook(): EBookInterface;
    public function createSmartphone(): SmartphoneInterface;
}