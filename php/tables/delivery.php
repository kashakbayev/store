<?php
class Delivery {
    private $deliveryID, $deliveryCompany;

    public function getDeliveryID()
    {
        return $this->deliveryID;
    }

    public function setDeliveryID($deliveryID)
    {
        $this->deliveryID = $deliveryID;
    }

    public function getDeliveryCompany()
    {
        return $this->deliveryCompany;
    }

    public function setDeliveryCompany($deliveryCompany)
    {
        $this->deliveryCompany = $deliveryCompany;
    }
}

$delivery = new Delivery();

?>