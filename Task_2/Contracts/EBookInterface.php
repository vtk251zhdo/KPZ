<?php

interface EBookInterface
{
    public function getBrand(): string;
    public function getModel(): string;
    public function getSpecs(): string;
}