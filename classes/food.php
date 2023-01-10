<?php
require_once __DIR__."/Product.php";

class Food extends Product{
    
    public $protein;

    function __construct($categories, $name, $type, $price, $image,  string $protein)
    {
        parent::__construct($categories, $name, $type, $price, $image);
        
        $this->protein = $protein;
    }
};