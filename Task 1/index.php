<?php

require_once "autoload.php";

function TestLogic(LoggerInterface $logger)
{
    $logger->log("Початок операції...");
    $logger->warn("Попередження");
    $logger->error("Сталася помилка");
}

echo "=== ТЕСТ КОНСОЛІ ===\n";

$consoleLogger = new ConsoleLogger();
TestLogic($consoleLogger);

echo "\n=== АДАПТЕР ===\n";
$fileWriter = new FileWriter();
$fileLogger = new FileLoggerAdapter($fileWriter);
TestLogic($fileLogger);