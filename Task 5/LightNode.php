<?php

abstract class LightNode
{
    abstract public function outerHTML(): string;
    abstract public function innerHTML(): string;
}