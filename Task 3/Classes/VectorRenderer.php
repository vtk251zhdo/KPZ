<?php

class VectorRenderer implements RenderInterface
{
    public function renderShape(string $shapeName): void
    {
        echo "Рендеринг фігури $shapeName за допомогою векторного рендерера\n";
    }
}