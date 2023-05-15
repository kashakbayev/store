<?php
class Category {
    private $catID, $catName;
    
    public function getCatID()
    {
        return $this->catID;
    }

    public function setCatID($catID)
    {
        $this->catID = $catID;
    }

    public function getCatName()
    {
        return $this->catName;
    }

    public function setCatName($catName)
    {
        $this->catName = $catName;
    }
}

$cat = new Category();

?>