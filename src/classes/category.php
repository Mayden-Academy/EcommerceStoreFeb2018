<?php

namespace store;
use PDO;
use Exception;


interface dbConnectable {
        public function connectToDB();
}


trait dBConnect {
    public $db;

    public function connectToDB() {
        try{
            $this->db = new PDO('mysql:host=127.0.0.1; dbname=ecommerce-shop', 'root');
        } catch (Exception $e) {
            echo "your connection did not work: " . $e->getMessage();
        }
    }

}

class Category implements dbConnectable {
    private $id;
    private $categoryName;

    use dBConnect;

    public function __construct() {
        $this->connectToDB();
    }

    //getters?


    //setters?


}

function createObjects($db):array {
    $query=$db->prepare("SELECT `id`, `categoryName` FROM `categories` WHERE `deleted` = 0;");
    $query->setFetchMode(PDO::FETCH_CLASS, 'Category');
    $query->execute();

    return $query->fetchAll();
}


$db = new PDO('mysql:host=127.0.0.1; dbname=ecommerce-shop', 'root');

function displayCategories ($array):string {

    $HTMLString = "";
    $path = "/src/app/categories.php?id=";

    foreach ($array as $category){
        $HTMLString .= "<a href='" . $path . $category["id"] . "' >" . $category["categoryName"] . "</a><br>" ;
    }

    return $HTMLString;
}

$arrayToTest = createObjects($db);


echo displayCategories($arrayToTest);

