<?php

namespace store;

use \PDO;
use \store\Product;

$db = new PDO('mysql:host=127.0.0.1; dbname=ecommerceStore2018', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT * FROM products WHERE categoryId = :categoryId");

$categoryId = '1';
//var_dump($_GET['id']);

$query->bindParam(':categoryId', $categoryId);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_CLASS, 'store/Product');

var_dump($result);