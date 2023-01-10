<?php
require_once __DIR__."/product.php";

class Food extends Product{
    public $type;
    public $protein;

    function __construct($categorie, $name, $price, $image, string $type, string $protein)
    {
        parent::__construct($categorie, $name, $price, $image);
        $this->type = $type;
        $this->protein = $protein;
    }
};