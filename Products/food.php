<?php

require_once__DIR__ .'/Products.php';

class food extends Products{
    public $type;
    public $expire_date;

    public function__construct($name, $price, $quantity, $animal_type); {
        parent::__construct($name, $price, $quantity, $animal_type);
        this->type = $_type;
        this->expire_date = $_expire_date;
}
}


?>