<?php

interface CharacterBuilderInterface
{
    public function setName(string $name): self;
    public function setHeight(int $height): self;
    public function setBodyType(string $bodyType): self;
    public function setHairColor(string $hairColor): self;
    public function setEyeColor(string $eyeColor): self;
    public function setClothes(string $clothes): self;
    public function addInventoryItem(string $item): self;
    public function build(): Character;
}