<?php

abstract class Subscription
{
    protected float $monthlyFee;
    protected int $minPeriod;
    protected array $channels;
    protected array $features;

    public function __construct(float $monthlyFee, int $minPeriod, array $channels, array $features)
    {
        $this->monthlyFee = $monthlyFee;
        $this->minPeriod = $minPeriod;
        $this->channels = $channels;
        $this->features = $features;
    }

    public function getMonthlyFee(): float
    {
        return $this->monthlyFee;
    }

    public function getMinPeriod(): int
    {
        return $this->minPeriod;
    }

    public function getChannels(): array
    {
        return $this->channels;
    }

    public function getFeatures(): array
    {
        return $this->features;
    }

    public function setMonthlyFee(float $monthlyFee): void
    {
        $this->monthlyFee = $monthlyFee;
    }

    public function addFeature(string $feature): void
    {
        $this->features[] = $feature;
    }

    abstract public function getName(): string;

    public function showInfo(): void
    {
        echo "Підписка: " . $this->getName() . PHP_EOL;
        echo "Щомісячна плата: " . number_format($this->monthlyFee, 2) . " грн" . PHP_EOL;
        echo "Мінімальний період: " . $this->minPeriod . " міс." . PHP_EOL;
        echo "Канали: " . implode(", ", $this->channels) . PHP_EOL;
        echo "Можливості: " . implode(", ", $this->features) . PHP_EOL;
        echo str_repeat("-", 50) . PHP_EOL;
    }
}