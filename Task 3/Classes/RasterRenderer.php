<?php

class RasterRenderer implements RenderInterface
{
    public function renderShape(string $shapeName): void
    {
        echo "Рендеринг фігури $shapeName за допомогою растрового рендерера\n";
    }
}