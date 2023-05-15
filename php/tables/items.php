<?php
class Items {
    private $itemID, $itemName, $catID, $colorID, $price;
    
    public function getItemID()
    {
        return $this->itemID;
    }

    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
    }

    public function getItemName()
    {
        return $this->itemName;
    }

    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    public function getCatID()
    {
        return $this->catID;
    }

    public function setCatID($catID)
    {
        $this->catID = $catID;
    }

    public function getColorID()
    {
        return $this->colorID;
    }

    public function setColorID($colorID)
    {
        $this->colorID = $colorID;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}

$item = new Items();

?>