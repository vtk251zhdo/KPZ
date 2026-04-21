<?php

class Square extends Shape
{

    public function draw(): void
    {
        $this->renderer->renderShape("Square");
    }
}