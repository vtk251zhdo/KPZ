<?php

interface LaptopInterface
{
    public function getBrand(): string;
    public function getModel(): string;
    public function getSpecs(): string;
}