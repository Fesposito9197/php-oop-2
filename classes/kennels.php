<?php
require_once __DIR__ . "/product.php";

class Kennels extends Product {
    public $size;

    function __construct($categories, $name, $type, $price, $image, int $size)
    {
        parent::__construct($categories, $name, $type, $price, $image);
        $this->size = $size;
        
    }
}