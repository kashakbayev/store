<?php
class Item_color {
    private $colorID, $colorName;

    public function getColorID()
    {
        return $this->colorID;
    }

    public function setColorID($colorID)
    {
        $this->colorID = $colorID;
    }

    public function getColorName()
    {
        return $this->colorName;
    }

    public function setColorName($colorName)
    {
        $this->colorName = $colorName;
    }
}

$color = new Item_color();
?>