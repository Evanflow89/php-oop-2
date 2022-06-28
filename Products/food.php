<?php


class food extends Products{
    public $type;
    public $expire_date;

    public function __construct(string $_name,string $_price, int $_quantity,string $_animal_type) {
        parent::__construct($name, $price, $quantity, $animal_type);
        $this->type = $_type;
        $this->expire_date = $_expire_date;
}
}


?>