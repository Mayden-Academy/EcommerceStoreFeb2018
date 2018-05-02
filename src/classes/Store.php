<?php

namespace Store;
use Store\Category as Category;
use \PDO;
use Store\interfaces\ConnectToDb;
use Store\interfaces\GetCategories as GetCategories;

class Store implements GetCategories
{
    private $db;

    public function __construct(ConnectToDb $con)
    {
        $this->db = $con->ConnectToDb();
    }

    /**
     *Database query to get category data
     *
     * @return array array of objects of category class
     */
    public function getCategories():array {
        $query = $this->db->prepare("SELECT `id`, `categoryName`, `defaultImageFilePath`,`defaultImageAlt` FROM `categories` WHERE `deleted` = 0;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Category::class);
    }
}