<?php

class Runway
{
    private string $id;
    private bool $isBusy = false;

    public function __construct()
    {
        $this->id = uniqid("RWY_");
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function isBusy(): bool
    {
        return $this->isBusy;
    }

    public function setBusy(bool $status): void
    {
        $this->isBusy = $status;
        $status ? $this->highLightRed() : $this->highLightGreen();
    }

    private function highLightRed(): void
    {
        echo "--- Runway {$this->id} is busy! ---\n";
    }

    private function highLightGreen(): void
    {
        echo "--- Runway {$this->id} is free! ---\n";
    }
}