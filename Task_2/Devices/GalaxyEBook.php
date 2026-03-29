<?php

class GalaxyEBook implements EBookInterface
{
    public function getBrand(): string
    {
        return 'Galaxy';
    }

    public function getModel(): string
    {
        return 'Galaxy Ink';
    }

    public function getSpecs(): string
    {
        return '8-inch E-Ink, 32GB, night mode';
    }
}