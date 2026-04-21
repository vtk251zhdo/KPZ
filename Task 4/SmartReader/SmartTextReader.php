<?php

class SmartTextReader implements TextReaderInterface
{

    public function readText(string $filePath): array
    {

        $fullPath = __DIR__ . '/../' . $filePath;

        if (!file_exists($fullPath)) {
            echo "[SYSTEM]: Файл за шляхом '$fullPath' не знайдено\n";
            echo "[DEBUG]: Поточна директорія: " . getcwd() . "\n";
            return [];
        }

        $content = file($fullPath, FILE_IGNORE_NEW_LINES);
        $result = [];

        foreach ($content as $line) {
            $result[] = str_split($line);
        }

        return $result;
    }
}