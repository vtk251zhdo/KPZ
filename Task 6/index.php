<?php
require_once "autoload.php";

$bookText = "ROMEO AND JULIET
ACT V
 Scene I. Mantua. A Street.
 Dramatis Personae
ESCALUS, Prince of Verona.
 MERCUTIO, kinsman to the Prince.";

$lines = explode("\n", $bookText);
$root = new LightElementNode(LightTagFactory::getTagType("div", "block", false));

$startTime = microtime(true);
$startMemory = memory_get_usage();

foreach ($lines as $index => $line) {
    $trimmedLine = trim($line);
    if (empty($trimmedLine))
        continue;

    if ($index === 0) {
        $type = LightTagFactory::getTagType("h1", "block", false);
    } elseif (strlen($line) < 20) {
        $type = LightTagFactory::getTagType("h2", "block", false);
    } elseif (strpos($line, ' ') === 0) {
        $type = LightTagFactory::getTagType("blockquote", "block", false);
    } else {
        $type = LightTagFactory::getTagType("p", "block", false);
    }

    $element = new LightElementNode($type);
    $element->addChild(new LightTextNode($line));
    $root->addChild($element);
}

$endMemory = memory_get_usage();
$memoryUsed = ($endMemory - $startMemory) / 1024;

echo "=== FLYWEIGHT BOOK RENDER ===\n\n";
echo $root->outerHTML();
echo "\n-----------------------------\n";
echo "Використано пам'яті: " . round($memoryUsed, 2) . " KB\n";