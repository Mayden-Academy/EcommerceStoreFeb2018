<?php

namespace store;

use \PDO;
use \Exception;

class DBConnect {
    /**
     *Connects to DB using PDO object.
     */
    public static function connectToDB() {
        try{
            return new PDO('mysql:host=127.0.0.1; dbname=ecommerce-shop', 'root');
        } catch (Exception $e) {
            echo "your connection did not work: " . $e->getMessage();
        }
    }
}