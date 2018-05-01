<?php

namespace Store;
use Store\Category as Category;
use Store\Product as Product;
use \PDO;
use Store\interfaces\GetCategories as GetCategories;

class Store implements GetCategories{

    static private $DB;

    /**
     * Assign database connection $DB
     */
    public static function setPDO(PDO $db){
        self::$DB = $db;
    }

    /**
     *Database query to get category data
     *
     * @return array array of objects of category class
     */
    public static function getCategories():array {
        $query = self::$DB->prepare("SELECT `id`, `categoryName`, `defaultImageFilePath`,`defaultImageAlt` FROM `categories` WHERE `deleted` = 0;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Category::class);
    }

    /**
     *Database query to get products data
     *
     * @return array array of objects of products class
     */
    public static function getProducts($categoryId):array {
        $query = self::$DB->prepare("
            SELECT `id`, `categoryId`, `productName`, `productPrice`, `productDescription`, `availableSizes`, `availableColors`, `deleted`
            FROM products 
            WHERE categoryId = :categoryId");

        $query->bindParam(':categoryId', $categoryId);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Product::class);
    }


}