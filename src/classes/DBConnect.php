<?php

namespace store;
//require_once "../../vendor/autoload.php";

use \PDO;
use \Exception;

class DBConnect {
    public static function connectToDB() {
        try{
            return new PDO('mysql:host=127.0.0.1; dbname=ecommerce-shop', 'root');
        } catch (Exception $e) {
            echo "your connection did not work: " . $e->getMessage();
        }
    }
}