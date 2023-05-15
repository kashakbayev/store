<?php
class Order_detail {
    private $id, $orderID, $itemID, $address1, $address2, $address3, $phone, $deliveryID, $comment;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getOrderID()
    {
        return $this->orderID;
    }

    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    public function getItemID()
    {
        return $this->itemID;
    }

    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
    }

    public function getAddress1()
    {
        return $this->address1;
    }

    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    public function getAddress2()
    {
        return $this->address2;
    }

    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    public function getAddress3()
    {
        return $this->address3;
    }

    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getDeliveryID()
    {
        return $this->deliveryID;
    }

    public function setDeliveryID($deliveryID)
    {
        $this->deliveryID = $deliveryID;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}

$ord_detail = new Order_detail();

?>