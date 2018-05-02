<?php
namespace Store;
require_once '../../vendor/autoload.php';

use Store\mySqlDbConnect as mySqlDbConnect;
use Store\Store as Store;

$mySqlCon = new mySqlDbConnect();
$store = new Store($mySqlCon);
$product = $store->getProductPage(1);

