<?php 
require_once __DIR__. "/../trait/GetName.php";
class Categorie {
    use Name;
    function __construct($name){
        $this->name = $name;
    }
}