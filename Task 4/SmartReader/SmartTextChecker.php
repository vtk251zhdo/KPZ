<?php

class SmartTextChecker implements TextReaderInterface
{
    private TextReaderInterface $reader;

    public function __construct(TextReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function readText(string $filePath): array
    {
        echo "[Log]: Відкриття файлу '$filePath'\n";

        $data = $this->reader->readText($filePath);

        echo "[Log]: Файл прочитано успішно\n";

        $totalLines = count($data);
        $totalChars = 0;

        foreach ($data as $line) {
            $totalChars += count($line);
        }

        echo "[Stats]: Рядків: $totalLines, Символів: $totalChars\n";
        echo "[Log]: Закриття файлу\n";

        return $data;
    }
}