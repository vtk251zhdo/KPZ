<?php

class FileLoggerAdapter implements LoggerInterface
{
    private FileWriter $fileWriter;

    public function __construct(FileWriter $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function log(string $message): void
    {
        $this->fileWriter->writeLine("[INFO] " . $message);
    }

    public function error(string $message): void
    {
        $this->fileWriter->writeLine("[ERROR] " . $message);
    }

    public function warn(string $message): void
    {
        $this->fileWriter->writeLine("[WARNING] " . $message);
    }
}