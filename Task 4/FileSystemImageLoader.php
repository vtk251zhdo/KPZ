<?php

class FileSystemImageLoader implements ImageLoaderStrategy
{
    public function loadImage(string $href): string
    {
        return "--- Image data loaded from LOCAL FILE: $href ---";
    }
}