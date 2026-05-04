<?php

interface ImageLoaderStrategy
{
    public function loadImage(string $href): string;
}