<?php

class Virus
{
    private float $weight;
    private int $age;
    private string $name;
    private string $species;

    private array $children = [];

    public function __construct(float $weight, int $age, string $name, string $species)
    {
        $this->weight  = $weight;
        $this->age     = $age;
        $this->name    = $name;
        $this->species = $species;
    }

    public function addChild(Virus $child): void
    {
        $this->children[] = $child;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function __Clone()
    {
        $clonedChildren = [];

        foreach ($this->children as $child) {
            $clonedChildren[] = clone $child;
        }

        $this->children = $clonedChildren;
    }

    public function printFamilyTree(int $level = 0): void
    {
        echo str_repeat('  ', $level)
            . "- Name: {$this->name}, Species: {$this->species}, Age: {$this->age}, Weight: {$this->weight}"
            . PHP_EOL;

        foreach ($this->children as $child) {
            $child->printFamilyTree($level + 1);
        }
    }

}
