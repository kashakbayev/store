<?php
class PaymentType {
    private $pTypeID, $name;

    public function getPTypeID()
    {
        return $this->pTypeID;
    }

    public function setPTypeID($pTypeID)
    {
        $this->pTypeID = $pTypeID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

$pType = new PaymentType();

?>