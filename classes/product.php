<?php
require_once __DIR__. "/../trait/GetName.php";
class Product {
    public $categories;
    use Name;
    public $type;
    public $price;
    public $image;
    

    function __construct(array $categories ,string $name, string $type , int $price , $image)
    {
        $this->categories = $categories;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }

     
    function correctprice($price){
        if(!is_int($price)){
            throw new Exception("inserire un importo piu alto");
        }
        return $this->$price;
    }

    
    
}