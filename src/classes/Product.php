<?php

namespace Store;
use \PDO;

class Product
{
    private $id;
    private $categoryId;
    private $productName;
    private $productPrice;
    private $productDescription;
    private $availableSizes;
    private $availableColors;
    private $imageFilePath;

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

    public function getImageFilePath()
    {
        return $this->imageFilePath;
    }

}

?>



