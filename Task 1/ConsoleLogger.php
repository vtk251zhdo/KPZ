<?php

class ConsoleLogger implements LoggerInterface
{
    public function log($message): void
    {
        echo "\033[32m[LOG]: $message\033[0m\n";
    }
    public function error($message): void
    {
        echo "\033[32m[ERROR]: $message\033[0m\n";
    }
    public function warn($message): void
    {
        echo "\033[32m[WARN]: $message\033[0m\n";
    }
}