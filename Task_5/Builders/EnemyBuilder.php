<?php

class EnemyBuilder implements CharacterBuilderInterface
{
    private Character $character;

    public function __construct()
    {
        $this->reset();
    }

    private function reset(): void
    {
        $this->character = new Character();
        $this->character->setRole('Enemy');
        $this->character->setAlignment('Evil');
    }

    public function setName(string $name): self
    {
        $this->character->setName($name);
        return $this;
    }

    public function setHeight(int $height): self
    {
        $this->character->setHeight($height);
        return $this;
    }

    public function setBodyType(string $bodyType): self
    {
        $this->character->setBodyType($bodyType);
        return $this;
    }

    public function setHairColor(string $hairColor): self
    {
        $this->character->setHairColor($hairColor);
        return $this;
    }

    public function setEyeColor(string $eyeColor): self
    {
        $this->character->setEyeColor($eyeColor);
        return $this;
    }

    public function setClothes(string $clothes): self
    {
        $this->character->setClothes($clothes);
        return $this;
    }

    public function addInventoryItem(string $item): self
    {
        $this->character->addInventoryItem($item);
        return $this;
    }

    public function addEvilDeed(string $deed): self
    {
        $this->character->addEvilDeed($deed);
        return $this;
    }

    public function build(): Character
    {
        $result = $this->character;
        $this->reset();
        return $result;
    }
}