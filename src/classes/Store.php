<?php

namespace Store;
use Store\Category as Category;
use \PDO;
use Store\interfaces\GetCategories as GetCategories;

class Store implements GetCategories{

    private $dBConnection;

    /**
     *Database query to get category data
     *
     * @return array array of objects of category class
     */
    public function getCategories():array {
        $query = $this->dBConnection->prepare("SELECT `id`, `categoryName`, `defaultImageFilePath`,`defaultImageAlt` FROM `categories` WHERE `deleted` = 0;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Category::class);
    }

    /**
     * Store constructor, adds db connection to object.
     * @param $db PDO object
     */
    public function __construct(PDO $db) {
        $this->dBConnection = $db;
    }
}