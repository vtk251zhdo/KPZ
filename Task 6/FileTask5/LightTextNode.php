<?php

class LightTextNode extends LightNode
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function innerHTML(): string
    {
        return $this->text;
    }

    public function outerHTML(): string
    {
        return $this->text;
    }
}