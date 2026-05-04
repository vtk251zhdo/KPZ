<?php

abstract class LightNode
{
    protected array $listeners = [];

    abstract public function outerHTML(): string;
    abstract public function innerHTML(): string;

    // Метод підписки (аналог JS addEventListener)
    public function addEventListener(string $eventType, EventListener $listener): void
    {
        if (!isset($this->listeners[$eventType])) {
            $this->listeners[$eventType] = [];
        }
        $this->listeners[$eventType][] = $listener;
    }

    // Метод імітації події
    public function triggerEvent(string $eventType): void
    {
        echo "--- Event '$eventType' triggered on <" . $this->getTagName() . "> ---\n";
        if (isset($this->listeners[$eventType])) {
            foreach ($this->listeners[$eventType] as $listener) {
                $listener->update($eventType, $this);
            }
        }
    }

    // Допоміжний метод для логування
    abstract protected function getTagName(): string;
}