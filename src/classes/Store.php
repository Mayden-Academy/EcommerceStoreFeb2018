<?php

namespace Store;
use Store\interfaces\ConnectToDb;
use \PDO;
use Store\Category as Category;
use Store\Product as Product;
use Store\interfaces\GetCategories as GetCategories;

class Store implements GetCategories
{
    private $db;

    /**
     * Store constructor.
     *
     * @param ConnectToDb $con
     */
    public function __construct(ConnectToDb $con)
    {
        $this->db = $con->ConnectToDb();
    }

    /**
     *Database query to get category data
     *
     * @return array array of objects of category class
     */
    public function getCategories():array
    {
        $query = $this->db->prepare("SELECT `id`, `categoryName`, `defaultImageFilePath`,`defaultImageAlt` FROM `categories` WHERE `deleted` = 0;");
        $query->setFetchMode(PDO::FETCH_CLASS, Category::class);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Gets the current category
     *
     * @param int $categoryId Category Id retrieved from $_GET
     *
     * @return array
     */
    public function getCurrentCategory(int $categoryId):array
    {
        $query = $this->db->prepare("SELECT `categoryName` FROM `categories` WHERE `id` = :categoryId AND `deleted` = 0;");
        $query->bindParam(':categoryId', $categoryId);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        return $query->fetch();
    }

    /**
     *Database query to get products data
     *
     * @return array array of objects of products class
     */
    public function getProducts(int $categoryId):array
    {
        $query = $this->db->prepare("SELECT products.id, products.productName, products.productPrice, products.productDescription, products.availableSizes, products.availableColors, images.imageFilePath
                                     FROM products 
                                     LEFT JOIN images 
                                     ON products.id = images.productId
                                     WHERE categoryId = :categoryId
                                     AND products.deleted = 0");

        $query->bindParam(':categoryId', $categoryId);
        $query->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Product::class);
    }

}