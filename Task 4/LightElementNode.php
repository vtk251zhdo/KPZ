<?php

class LightElementNode extends LightNode
{
    private string $tagName;
    private string $displayType;
    private bool $isSelfClosing;
    private array $cssClasses = [];
    private array $children = [];

    public function __construct(string $tagName, string $displayType, bool $isSelfClosing, array $cssClasses = [])
    {
        $this->tagName = $tagName;
        $this->displayType = $displayType;
        $this->isSelfClosing = $isSelfClosing;
        $this->cssClasses = $cssClasses;
    }

    public function addChild(LightNode $node): void
    {
        $this->children[] = $node;
    }

    protected function getTagName(): string
    {
        return $this->tagName;
    }

    public function innerHTML(): string
    {
        $html = "";
        foreach ($this->children as $child) {
            $html .= $child->outerHTML();
        }
        return $html;
    }

    public function outerHTML(): string
    {
        $classString = !empty($this->cssClasses) ? ' class="' . implode(' ', $this->cssClasses) . '"' : '';
        $html = "<{$this->tagName}{$classString}";
        if ($this->isSelfClosing)
            return $html . " />";

        $html .= ">" . $this->innerHTML() . "</{$this->tagName}>";
        return ($this->displayType === 'block') ? $html . "\n" : $html;
    }
}