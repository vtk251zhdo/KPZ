<?php

class LightTagType
{
    public string $tagName;
    public string $displayType;
    public bool $isSelfClosing;

    public function __construct(string $tagName, string $displayType, bool $isSelfClosing)
    {
        $this->tagName = $tagName;
        $this->displayType = $displayType;
        $this->isSelfClosing = $isSelfClosing;
    }
}