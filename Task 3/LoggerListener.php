<?php

class LoggerListener implements EventListener
{
    public function update(string $eventType, LightNode $node): void
    {
        echo "[Logger] Observed '$eventType' on node.\n";
    }
}

class AnalyticsListener implements EventListener
{
    public function update(string $eventType, LightNode $node): void
    {
        echo "[Analytics] Sending event data to server for event: $eventType\n";
    }
}