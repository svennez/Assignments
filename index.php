<?php

require_once('settings.php');
require_once('product.php');
require_once('downloadable.php');


$myProduct = new Product('DEF456');
$sku = $myProduct->getSku();

$myOtherProduct = new Product(1);
$sku2 = $myOtherProduct->getSku();

$myDigitalProduct = new DownloadableProduct();

echo $sku . '<br />' . $sku2 . '<br>' . 2 . "<br>";
echo $myDigitalProduct->download();