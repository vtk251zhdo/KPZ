<?php

class LightImageNode extends LightElementNode
{
    private string $href;
    private ImageLoaderStrategy $loader;

    public function __construct(string $href, ImageLoaderStrategy $loader)
    {
        parent::__construct("img", "inline", true, ["html-image"]);
        $this->href = $href;
        $this->loader = $loader;
    }

    public function outerHTML(): string
    {
        echo $this->loader->loadImage($this->href) . "\n";

        $classString = ' class="html-image"';
        return "<img src=\"{$this->href}\"{$classString} />\n";
    }
}