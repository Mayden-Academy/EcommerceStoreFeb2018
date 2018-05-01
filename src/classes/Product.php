<?php

namespace Store;
use \PDO;

//$db = new PDO('mysql:host=127.0.0.1; dbname=ecommerce-shop', 'root');
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//
//$query = $db->prepare("
//SELECT `id`, `categoryId`, `productName`, `productPrice`, `productDescription`, `availableSizes`, `availableColors`, `deleted`
//FROM products
//WHERE categoryId = :categoryId");
//
//$categoryId = '1';
////var_dump($_GET['id']);
//
//$query->bindParam(':categoryId', $categoryId);
//$query->execute();
//$result = $query->fetchAll(PDO::FETCH_CLASS, 'store\Product');
//
//echo '<pre>' . var_export($result, true) . '</pre>';


class Product
{
    private $id;
    private $categoryId;
    private $productName;
    private $productPrice;
    private $productDescription;
    private $availableSizes;
    private $availableColors;
    private $deleted;

    public function getId()
    {
        return $this->id;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getProductPrice()
    {
        return $this->productPrice;
    }

    public function getProductDescription()
    {
        return $this->productDescription;
    }

    public function getAvailableSizes()
    {
        return $this->availableSizes;
    }

    public function getAvailableColors()
    {
        return $this->availableColors;
    }
}

?>



