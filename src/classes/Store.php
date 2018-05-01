<?php

namespace Store;
use Store\Category as Category;
use \PDO;
use Store\interfaces\GetCategories as GetCategories;

class Store implements GetCategories{

    static private $DB;

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

    public static function setPDO(PDO $db){
        self::$DB = $db;
    }
}