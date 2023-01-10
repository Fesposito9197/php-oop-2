<?php
require_once __DIR__."/product.php";

class Food extends Product{
    
    public $protein;

    function __construct($categorie, $name, $type, $price, $image,  string $protein)
    {
        parent::__construct($categorie, $name, $type, $price, $image);
        
        $this->protein = $protein;
    }
};