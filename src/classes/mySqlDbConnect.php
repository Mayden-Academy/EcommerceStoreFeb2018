<?php

namespace Store;

use \PDO;
use \Exception;
use Store\interfaces\ConnectToDb;

class mySqlDbConnect implements ConnectToDb {
    private $db;

    /**
     *Connects to mySql DB using PDO
     *
     * return PDO or String depending on connection to mySql database success
     */
    public function __construct()
    {
        try{
            $this->db = new PDO('mysql:host=127.0.0.1; dbname=ecommerce-shop', 'root');
        } catch (Exception $e) {
            echo "your connection did not work: " . $e->getMessage();
        }
    }

    public function ConnectToDb(){
        return $this->db;
    }
}