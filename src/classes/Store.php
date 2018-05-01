<?php

namespace Store;
use Store\Category as Category;
use Store\DBConnect as DBConnect;
require_once "../../vendor/autoload.php";
use \PDO;


class Store {

    private $dBConnection;

    public function getCategories(){
        $query = $this->dBConnection->prepare("SELECT `id`, `categoryName` FROM `categories` WHERE `deleted` = 0;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Category::class);
    }

    public function __construct($db) {
        $this->dBConnection = $db;
    }



}


$i = DBConnect::connectToDB();

$bob = new Store($i);
echo '<pre>' . var_export($bob->getCategories(), true) . '</pre>';