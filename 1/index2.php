<?php

$stringas = 'hello';

//echo'Hello wold';

$productName = 'Rudeniniai batai rudi';
$productDescription = 'Kazkas kazka kazkaip';
$productBrand = 'nike';
$simbol = '@';
$number= '1';

$productQty =4; 
$holesCount = 32;
$productManufacturetrYers = 2021;

$productPrice = 67.99;
$size = 41.5;
$weight = 0.234;

$inStock = true;
$waterProof = true;
$airLess = false;


echo "<pre>"
$product = [
'name'  => $productName,
'qty' => $productQty,
'price' =>  productPrice,
' waterProof' => $waterProof
];



$productQty = 4;


$product = [$productName,
            $productName,
            $integer3];

$product2 = [$productName,
            $productName,
            $integer3];
            
$product3 = [$productName,
            'sudas',
            1];

$products = [$product, $product2, $product3];



// echo "<pre>";
// print_r($products);
// Komentaras one line
/*
Komentaras
per keias
eilutes*/


//= + - / * % ;
$x = 6;
$y = 2;
 
$pvm = 21;

$productprice = 20.24;

$priceWhitTax = $productprice * (1+($pvm / 100));

echo $priceWhitTax;
 

















