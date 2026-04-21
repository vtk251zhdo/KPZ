<?php

class Circle extends Shape
{

    public function draw(): void
    {
        $this->renderer->renderShape("Circle");
    }
}