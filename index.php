<?php
require_once __DIR__ . "/classes/Categorie.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Toy.php";
require_once __DIR__ . "/classes/Kennels.php";

$dog = new Categorie("cane");

$cat = new Categorie("gatto");


$products_food = [
    new Food([$dog],"felix","crocchette", 10, "product image", "carne rossa"),
    new Food([$cat], "purina", "bocconcini", 7, "product image", "pesce"),
];

$products_kennels = [
    new Kennels([$dog], "baldiflex", "cuccia in legno", 100, "product image", 120),
    new Kennels([$cat], "pawhut", "cuccia di vimini", 110, "product image", 50 ),
];

$products_toy = [
    new Toy([$dog],"trixie", "corda da gioco" , 80, "product image", "stoffa"),
    new Toy([$cat],"dadypet","graffiatoio" ,60 ,"product image" , "plastica"),
];
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>animal shop</title>
    </head>
    <body>
        <ul>
            <?php foreach($products_food as $product) { ?>
            <li>
                <?php foreach($product->categories as $categorie) { ?>
                <h3>Prodotto per: <?php echo ucfirst($categorie->name) ?>  </h3>
                <?php } ?>
                <ul>
                    <li><?php echo ucfirst($product->image) ?></li>
                    <li><?php echo ucfirst($product->name) ?></li>
                    <li><?php echo ucfirst($product->type) ?></li>
                    <li><?php echo ucfirst($product->price) ?> euro</li>
                    <li><?php echo ucfirst($product->protein) ?></li>
                </ul>
            </li>
            <?php } ?>
        </ul>
        <ul>
            <?php foreach($products_kennels as $product) { ?>
            <li>
                <?php foreach($product->categories as $categorie) { ?>
                <h3>Prodotto per: <?php echo ucfirst($categorie->name) ?>  </h3>
                <?php } ?>
                <ul>
                    <li><?php echo ucfirst($product->image) ?></li>
                    <li><?php echo ucfirst($product->name) ?></li>
                    <li><?php echo ucfirst($product->type) ?></li>
                    <li><?php echo ucfirst($product->price) ?> euro</li>
                    <li><?php echo ucfirst($product->size) ?> cm</li>
                </ul>
            </li>
            <?php } ?>
        </ul>
        <ul>
            <?php foreach($products_toy as $product) { ?>
            <li>
                <?php foreach($product->categories as $categorie) { ?>
                <h3>Prodotto per: <?php echo ucfirst($categorie->name) ?>  </h3>
                <?php } ?>
                <ul>
                    <li><?php echo ucfirst($product->image) ?></li>
                    <li><?php echo ucfirst($product->name) ?></li>
                    <li><?php echo ucfirst($product->type) ?></li>
                    <li><?php echo ucfirst($product->price) ?> euro</li>
                    <li><?php echo ucfirst($product->material) ?></li>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </body>
</html>