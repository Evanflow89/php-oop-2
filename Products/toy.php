<?php
require_once __DIR__ .'/Products.php';

class toy extends Products {
    public $type;
    public $size;

    public function__construct($name, $price, $quantity, $animal_type); {
        parent::__construct($name, $price, $quantity, $animal_type);
        this->type = $_type;
        this->size = $_size;
}
}
?>