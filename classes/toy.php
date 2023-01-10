<?php
require_once __DIR__ . "/product.php";

class Toy extends Product {
    public $material;

    function __construct($categories, $name, $type, $price, $image, string $material)
    {
        parent::__construct($categories, $name, $type, $price, $image);
        $this->material = $material;
        
    }
}
