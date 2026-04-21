<?php

class LightElementNode extends LightNode
{
    private LightTagType $type; 
    private array $children = [];

    public function __construct(LightTagType $type)
    {
        $this->type = $type;
    }

    public function addChild(LightNode $node): void
    {
        $this->children[] = $node;
    }

    public function outerHTML(): string
    {
        $html = "<{$this->type->tagName}>";
        if (!$this->type->isSelfClosing) {
            foreach ($this->children as $child) {
                $html .= $child->outerHTML();
            }
            $html .= "</{$this->type->tagName}>";
        }
        return ($this->type->displayType === 'block') ? $html . "\n" : $html;
    }

    public function innerHTML(): string
    {
        $html = "";
        foreach ($this->children as $child) {
            $html .= $child->outerHTML();
        }
        return $html;
    }
}