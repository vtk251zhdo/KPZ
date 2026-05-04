<?php

class TextEditor
{
    private TextDocument $document;
    private array $history = [];

    public function __construct(TextDocument $document)
    {
        $this->document = $document;
    }

    public function type(string $text): void
    {
        $this->document->setContent($text);
    }

    public function save(): void
    {
        echo "--- Saving state... ---\n";
        $this->history[] = $this->document->createMemento();
    }

    public function undo(): void
    {
        if (empty($this->history)) {
            echo "--- Nothing to undo! ---\n";
            return;
        }

        echo "--- Undoing changes... ---\n";
        $memento = array_pop($this->history);
        $this->document->restore($memento);
    }

    public function printContent(): void
    {
        echo "Current content: [" . $this->document->getContent() . "]\n";
    }
}