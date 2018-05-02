<?php
namespace Store;
require_once  '../../vendor/autoload.php';
use Store\Category as Category;
use Store\Product as Product;
use \PDO;
use Store\Interfaces\ConnectToDb;
use Store\Interfaces\GetCategories as GetCategories;
use Store\Interfaces\GetProductPageable as GetProductPageable;

class Store implements GetCategories, GetProductPageable
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
    public function getCategories(): array {
        $query = $this->db->prepare("SELECT `id`, `categoryName`, `defaultImageFilePath`,`defaultImageAlt` FROM `categories` WHERE `deleted` = 0;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Category::class);
    }

    /**
     *Database query to get product data
     *
     * @param $id integer takes the id of the product
     * @return  Product class object
     */
    public function getProductPage(int $id): Product {
        $query = $this->db->prepare("SELECT `products`.`id`, 
        `products`.`productName`, `products`.`productPrice`, `products`.`availableColors`
        ,`products`.`availableSizes`, `products`.`productDescription`,`images`.`imageRef`
          FROM `products` LEFT JOIN `images` ON `products`.`id` = `images`.`productId`
        WHERE `products`.`id`=:idInput;");

        $query->bindParam(':idInput', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_CLASS,  Product::class);
    }
}

