<?php

interface EventListener
{
    public function update(string $eventType, LightNode $node): void;
}