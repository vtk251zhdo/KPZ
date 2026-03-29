<?php

class CharacterDirector
{
    public function createDreamHero(HeroBuilder $builder): Character
    {
        return $builder
            ->setName('Artemis')
            ->setHeight(180)
            ->setBodyType('Athletic')
            ->setHairColor('Black')
            ->setEyeColor('Green')
            ->setClothes('Silver armor with blue cape')
            ->addInventoryItem('Sword of Light')
            ->addInventoryItem('Shield')
            ->addInventoryItem('Healing potion')
            ->addGoodDeed('Saved the kingdom')
            ->addGoodDeed('Protected villagers')
            ->build();
    }

    public function createWorstEnemy(EnemyBuilder $builder): Character
    {
        return $builder
            ->setName('Mordrax')
            ->setHeight(195)
            ->setBodyType('Massive')
            ->setHairColor('White')
            ->setEyeColor('Red')
            ->setClothes('Dark armor with spikes')
            ->addInventoryItem('Cursed blade')
            ->addInventoryItem('Poison')
            ->addInventoryItem('Dark crystal')
            ->addEvilDeed('Destroyed villages')
            ->addEvilDeed('Stole ancient relics')
            ->build();
    }
}