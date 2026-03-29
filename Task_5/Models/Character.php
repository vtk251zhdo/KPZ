<?php

class Character{
    private string $role;
    private string $name;
    private int $height;
    private string $bodyType;
    private string $hairColor;
    private string $eyeColor;
    private string $clothes;
    private array $inventory = [];
    private array $goodDeeds = [];
    private array $evilDeeds = [];
    private string $alignment = "Neutral";

    public function setRole(string $role): void{
        $this -> role = $role;
    }

    public function setName(string $name): void{
        $this -> name = $name;
    }

    public function setHeight(int $height): void{
        $this -> height = $height;
    }

    public function SetBodyType(string $bodyType): void{
        $this -> bodyType = $bodyType;
    }

    public function setHairColor(string $hairColor): void{
        $this -> hairColor = $hairColor;
    }

    public function setEyeColor(string $eyeColor): void{
        $this -> eyeColor = $eyeColor;
    }

    public function setClothes(string $clothes): void{
        $this -> clothes = $clothes;
    }

    public function addInventoryItem(string $item): void{
        $this -> inventory[] = $item;
    }

    public function addGoodDeed(string $deed): void{
        $this -> goodDeeds[] = $deed;
    }

    public function addEvilDeed(string $deed): void{
        $this -> evilDeeds[] = $deed;
    }

    public function setAlignment(string $alignment): void{
        $this -> alignment = $alignment;
    }

    public function showInfo(): void{
        echo "-------------------" . PHP_EOL;
        echo 'Роль: ' . $this -> role . PHP_EOL;
        echo 'Імя: ' . $this -> name . PHP_EOL;
        echo 'Зріст: ' . $this -> height . ' см' . PHP_EOL;
        echo 'Статура: ' . $this -> bodyType . PHP_EOL;
        echo 'Колір волосся: ' . $this -> hairColor . PHP_EOL;
        echo 'Колір очей: ' . $this -> eyeColor . PHP_EOL;
        echo 'Одяг: ' . $this -> clothes . PHP_EOL;
        echo 'Світогляд: ' . $this -> alignment . PHP_EOL;
        echo 'Інвентар: ' . implode(", ", $this -> inventory) . PHP_EOL;

        if (!empty($this->goodDeeds)) {
            echo "Добрі справи: " . implode(", ", $this->goodDeeds) . PHP_EOL;
        }

        if (!empty($this->evilDeeds)) {
            echo "Злі справи: " . implode(", ", $this->evilDeeds) . PHP_EOL;
        }

        echo "-------------------" . PHP_EOL;
    }
}