<?php

interface SmartphoneInterface
{
    public function getBrand(): string;
    public function getModel(): string;
    public function getSpecs(): string;
}