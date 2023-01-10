<?php

class Product {
    public $categorie;
    public $name;
    public $price;
    public $image;
    

    function __construct(object $categorie ,string $name , float $price , $image)
    {
        $this->categorie = $categorie;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}