<?php

class toy extends Products {
    public $type;
    public $size;

    public function __construct(string $_name,string $_price, int $_quantity,string $_animal_type) {
        parent::__construct($name, $price, $quantity, $animal_type);
        $this->type = $_type;
        $this->size = $_size;
}
}
?>