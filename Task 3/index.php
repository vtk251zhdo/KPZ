<?php

require_once "autoload.php";

echo "=== РЕНДЕРИНГ ФІГУР ===\n\n";

$raster = new RasterRenderer();
$vector = new VectorRenderer();

$circle = new Circle($raster);
$circle->draw();

$triangle = new Triangle($vector);
$triangle->draw();

$square = new Square($raster);
$square->draw();