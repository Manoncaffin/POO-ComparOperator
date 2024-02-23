<?php

class Destination {
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;

    public function __construct($data) {
       $this->location = $data['location'];
       $this->price = $data['price'];
       $this->tourOperatorId = $data['tour_operator_id'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTourOperatorId()
    {
        return $this->tourOperatorId;
    }
}

?>