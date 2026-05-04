<?php

class NetworkImageLoader implements ImageLoaderStrategy
{
    public function loadImage(string $href): string
    {
        return "--- Image data downloaded from WEB: $href ---";
    }
}