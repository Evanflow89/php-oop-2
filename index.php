<?php 
require_once __DIR__ .'/Products.php';
require_once __DIR__ .'/Products/food.php';
require_once __DIR__ .'/Products/toy.php';

$Friskies = new Products("cibo cani", 2.99, 1, "cane");

var_dump($Friskies);die;




?>