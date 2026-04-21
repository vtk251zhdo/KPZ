<?php

class SmartTextReaderLocker implements TextReaderInterface
{
    private TextReaderInterface $reader;
    private string $regex;

    public function __construct(TextReaderInterface $reader, string $regex)
    {
        $this->reader = $reader;
        $this->regex = $regex;
    }

    public function readText(string $filePath): array
    {
        if (preg_match($this->regex, $filePath)) {
            echo "[SECURITY]: Access denied! Файл '$filePath' заблоковано політикою безпеки.\n";
            return [];
        }

        return $this->reader->readText($filePath);
    }

}