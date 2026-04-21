<?php

interface TextReaderInterface
{
    public function readText(string $filePath): array;
}