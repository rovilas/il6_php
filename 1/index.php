<?php

$stringas = 'hello';

//echo'Hello wold';

$productName='Rudeniniai batai rudi';

$productDescription = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id enim enim. Maecenas pellentesque eros sed porta facilisis. Sed tincidunt suscipit scelerisque. Cras volutpat nulla lacus, at lobortis orci commodo dictum. Nulla sit amet quam tellus. Curabitur vitae nisi hendrerit sem varius feugiat id non ante. Aenean eu eros ut tellus tristique lobortis nec quis tortor. Mauris aliquet vestibulum augue a pharetra. Donec non ante felis. Ut non nisi sed urna efficitur commodo in non quam. Aliquam lobortis placerat nibh sed pellentesque. Vivamus id risus eget arcu vulputate gravida eu eget lectus. Quisque sit amet felis eu diam vehicula interdum id ut leo.';
$productBrand ='Nike';



//echo $productName[0];
// echo '<br>';
// echo $productDescription;
// echo '<br>';
// echo $productBrand;



$simbol = '@';

$number= '1';


$integer = 100;
$integer2 = 25555;
$integer3 = 123;

$productQty = 4;
$holesCount = 32;
$productManufacturerYears = 2021;

$productPrice = 67.99;
$size = 44.5;
$weight = 0.355;

$isInStock = true;
$waterPoof = true;
$airLess = false;


echo "<pre>";

$product = [
    'name' => $productName,
    'price' => $productPrice,
    'water_Poof' => $waterPoof, 
    'qty' => $productQty
];


$product2 = [
    'name' => 'Vasariniai Batai Balti',
    'price' => 99.99,
    'water_Poof' => true,
    'qty' => 3
];


$product = [$product, $product2];

//
// echo '<br>';
// echo $productDescription;
// echo '<br>';
// echo $productBrand;








// $product = [$productName,
//             $productName,
//             $integer3];
// 
// $product2 = [$productName,
//             $productName,
//             $integer3];
//             
// $product3 = [$productName,
//             'sudas',
//             1];
// 
// $products = [$product, $product2, $product3];



// echo "<pre>";
// print_r($products);
// Komentaras one line
/*
Komentaras
per keias
eilutes*/


//= + - / * % ;
//$x = 7;
//$y = 2;

$pvm =21;
$priceWhitTax = $productPrice * (1+($pvm / 100));

echo $priceWhitTax;
 

















