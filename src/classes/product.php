<?php

namespace store;


$db = new PDO('mysql:host=127.0.0.1; dbname=ecommerceStore2018', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT * FROM products WHERE categoryId = 1");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_CLASS, 'Product');


class Product {

}

var_dump($result);