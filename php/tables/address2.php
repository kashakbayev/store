<?php
class Address2 {
    private $address2ID, $name, $regionID, $postal_code;
    
    public function getAddress2ID()
    {
        return $this->address2ID;
    }

    public function setAddress2ID($address2ID)
    {
        $this->address2ID = $address2ID;

    }
 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRegionID()
    {
        return $this->regionID;
    }

    public function setRegionID($regionID)
    {
        $this->regionID = $regionID;
    }
 
    public function getPostal_code()
    {
        return $this->postal_code;
    }

    public function setPostal_code($postal_code)
    {
        $this->postal_code = $postal_code;
    }
}

$address2 = new Address2();

?>