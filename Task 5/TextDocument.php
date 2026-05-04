<?php

class TextDocument
{
    private string $content = "";

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    // Створює знімок поточного стану
    public function createMemento(): TextDocumentMemento
    {
        return new TextDocumentMemento($this->content);
    }

    // Відновлює стан зі знімка
    public function restore(TextDocumentMemento $memento): void
    {
        $this->content = $memento->getContent();
    }
}