<?php

class LightTagFactory
{
    private static array $types = [];

    public static function getTagType(string $tagName, string $displayType, bool $isSelfClosing): LightTagType
    {
        $key = $tagName . "_" . $displayType . "_" . ($isSelfClosing ? '1' : '0');
        if (!isset(self::$types[$key])) {
            self::$types[$key] = new LightTagType($tagName, $displayType, $isSelfClosing);
        }
        return self::$types[$key];
    }
}