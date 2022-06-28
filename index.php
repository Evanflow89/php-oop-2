<?php 
require_once __DIR__ .'/Products.php';
require_once __DIR__ .'/food.php';
require_once __DIR__ .'/toy.php';

$cibocane = new Products("cibo cani", 2.99, 1, "cane");

var_dump($cibocane);die;




?>