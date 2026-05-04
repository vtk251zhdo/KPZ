<?php

require_once "autoload.php";

echo "=== Testing Strategy Pattern for Images ===\n\n";

$networkLoader = new NetworkImageLoader();
$webImage = new LightImageNode("https://example.com/logo.png", $networkLoader);

echo "Web Image Rendering:\n";
echo $webImage->outerHTML();
echo "\n";

$fileLoader = new FileSystemImageLoader();
$localImage = new LightImageNode("/assets/photo.jpg", $fileLoader);

echo "Local Image Rendering:\n";
echo $localImage->outerHTML();

$container = new LightElementNode("div", "block", false, ["gallery"]);
$container->addChild($webImage);
$container->addChild($localImage);

echo "\n--- Gallery Container HTML ---\n";
echo $container->outerHTML();