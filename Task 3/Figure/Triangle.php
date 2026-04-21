<?php

class Triangle extends Shape
{

    public function draw(): void
    {
        $this->renderer->renderShape("Triangle");
    }
}