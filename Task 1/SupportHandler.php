<?php

abstract class SupportHandler
{
    protected ?SupportHandler $nextHandler = null;

    public function setNext(SupportHandler $handler): SupportHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    abstract public function handle(int $choice): bool;
}