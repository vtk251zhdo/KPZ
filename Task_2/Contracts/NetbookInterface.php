<?php

interface NetbookInterface
{
    public function getBrand(): string;
    public function getModel(): string;
    public function getSpecs(): string;
}