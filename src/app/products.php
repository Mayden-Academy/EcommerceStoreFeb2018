<?php

require_once '../../vendor/autoload.php';

use Store\Product as Product;
use Store\DBConnect as DBConnect;
use Store\Store as Store;

$dBConnect = DBConnect::connectToDB();
Store::setPDO($dBConnect);
$categories = Store::getProducts(1);

var_dump($categories);


?>