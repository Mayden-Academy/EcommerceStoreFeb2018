<?php

namespace Store;
use Store\Category as Category;
use \PDO;
use \Exception;

require_once "../../vendor/autoload.php";

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



class Store {
    use dBConnect;

    public function getCategories(){
        $query = $this->db->prepare("SELECT `id`, `categoryName` FROM `categories` WHERE `deleted` = 0;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Category::class);
    }

    public function __construct() {
        $this->connectToDB();
    }

}


$bob = new Store();
echo '<pre>' . var_export($bob->getCategories(), true) . '</pre>';