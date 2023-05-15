<?php
class Address1 {
    public $regionID, $regionName;

    function setRegionId($val) {
        $this->regionID = $val;
    }
    
    function getRegionId() {
        return $this->regionID;
    }

    function setRegionName($val) {
        $this->regionName = $val;
    }
    
    function getRegionName() {
        return $this->regionName;
    }
}

$address1 = new Address1();

?>