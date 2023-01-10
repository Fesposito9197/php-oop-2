<?php
require_once __DIR__ . "/categorie.php";
require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/food.php";

$dog = new Categorie("cane");

$cat = new Categorie("gatto");

$products = [
    new Food($dog,"friskies",10,"product image", "crocchette","carne rossa")
];
var_dump($products);