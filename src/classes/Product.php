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
    private $db;

    public function setDb($con){
        $this->db = $con->ConnectToDb();
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getCategoryId():float
    {
        return $this->categoryId;
    }

    public function getProductName():string
    {
        return $this->productName;
    }

    public function getProductPrice():float
    {
        return $this->productPrice;
    }

    public function getProductDescription():string
    {
        return $this->productDescription;
    }

    public function getAvailableSizes():string
    {
        return $this->availableSizes;
    }

    public function getAvailableColors():string
    {
        return $this->availableColors;
    }

    public function getImageFilePath():string
    {
        return $this->imageFilePath;
    }

    public function getImages(int $id): array
    {
    $query = $this->db->prepare("SELECT `imageFilePath` FROM `images` WHERE `productId` = :id");
    $query->bindParam(':id', $id);
    $query->execute();
    return $query->fetchAll();
    }
}

