<?php
require_once __DIR__ . "/classes/categorie.php";
require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . "/classes/toy.php";
require_once __DIR__ . "/classes/kennels.php";

$dog = new Categorie("cane");

$cat = new Categorie("gatto");

$products = [
    new Food($dog,"felix","crocchette", 10, "product image", "carne rossa"),
    new Food($cat, "purina", "bocconcini", 7, "product image", "pesce" ),
    
];
var_dump($products);