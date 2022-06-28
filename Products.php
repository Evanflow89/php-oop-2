<?php

class Products {
    public $name;
    public $price;
    public $quantity;
    public $animal_type;


    public function__construct(string $_name,string $_price, int $_quantity,string $_animal_type)
    {

    this->name = $_name;
    this->price = $_price;
    this->quantity = $_quantity;
    this->animal_type= $animal_type;
    }
}

?>