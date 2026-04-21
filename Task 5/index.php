<?php

require_once "autoload.php";

echo "=== LightHTML Markup Language ===\n\n";

$container = new LightElementNode("div", "block", false, ["container", "main-page"]);

$header = new LightElementNode("h1", "block", false, ["title"]);
$header->addChild(new LightTextNode("Мій список покупок"));
$container->addChild($header);

$ul = new LightElementNode("ul", "block", false, ["list-group"]);

$items = ["Хліб", "Молоко", "Кава"];
foreach ($items as $item) {
    $li = new LightElementNode("li", "block", false, ["list-item"]);
    $li->addChild(new LightTextNode($item));
    $ul->addChild($li);
}

$container->addChild($ul);

$img = new LightElementNode("img", "inline", true, ["icon"]);
$container->addChild($img);

echo "Кількість елементів у контейнері: " . $container->getChildrenCount() . "\n\n";

echo "--- Вміст (innerHTML) заголовка ---\n";
echo $header->innerHTML() . "\n\n";

echo "--- Повний код сторінки (outerHTML) ---\n";
echo $container->outerHTML();