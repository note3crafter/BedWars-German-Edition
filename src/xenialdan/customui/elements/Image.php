<?php

namespace xenialdan\customui\elements;

use pocketmine\Player;

class Image extends UIElement
{
//TODO! Blame mojang, doesn't work yet
    public $texture;
    public $width;
    public $height;

    public function __construct($texture, $width = 0, $height = 0)
    {
        $this->texture = $texture;
        $this->width = $width;
        $this->height = $height;
    }

    final public function jsonSerialize()
    {
        return [
            "text" => "sign",
            "type" => "image",
            "texture" => $this->texture,
            "size" => [$this->width, $this->height]
        ];
    }

    public function handle($value, Player $player)
    {
        return null;
    }

}
