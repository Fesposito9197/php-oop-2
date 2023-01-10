<?php

class Product {
    public $categorie;
    public $name;
    public $type;
    public $price;
    public $image;
    

    function __construct(array $categorie ,string $name, string $type , float $price , $image)
    {
        $this->categorie = $categorie;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }
}