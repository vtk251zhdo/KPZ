<?php

abstract class Shape
{
    protected RenderInterface $renderer;

    public function __construct(RenderInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    abstract public function draw(): void;

}