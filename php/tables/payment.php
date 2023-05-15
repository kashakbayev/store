<?php
class Payment {
    private $paymentID, $pTypeID, $date, $status, $orderID, $customerID;

    public function getPaymentID()
    {
        return $this->paymentID;
    }

    public function setPaymentID($paymentID)
    {
        $this->paymentID = $paymentID;
    }

    public function getPTypeID()
    {
        return $this->pTypeID;
    }

    public function setPTypeID($pTypeID)
    {
        $this->pTypeID = $pTypeID;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getOrderID()
    {
        return $this->orderID;
    }

    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    public function getCustomerID()
    {
        return $this->customerID;
    }

    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
    }
}
?>