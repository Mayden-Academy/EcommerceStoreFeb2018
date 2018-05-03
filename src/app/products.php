<?php

require_once '../../vendor/autoload.php';
use Store\mySqlDbConnect as mySqlDbConnect;
use Store\Store as Store;
use Store\Category as Category;
use Store\Product as Product;

$mySqlCon = new mySqlDbConnect();
$store = new Store($mySqlCon);
$categories = $store->getCategories();
$categoryId = $_GET['categoryId'];
$currentCategory = $store->getCurrentCategory($categoryId);
$products = $store->getProducts($categoryId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Totally Pawesome</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
<section class="row banner">
    <div class="home col-xs-3 col-sm-2">
        <a href="../../index.php">
            <h2>Home</h2>
        </a>
    </div>
    <div class="shop-name col-xs-9 col-sm-10">
        <h2>Totally Pawesome</h2>
    </div>
</section>
<section class="row main">
    <div class="sidebar col-xs-3 col-sm-2">
        <?php
        foreach($categories as $category) {
            if($category instanceof Category) { ?>
                <a href="./products.php?categoryId=<?php echo $category->getId(); ?>">
                    <h4><?php echo $category->getCategoryName(); ?></h4>
                </a>
        <?php
            }
        }
        ?>
    </div>
    <div class="main-content col-xs-9 col-sm-10">
        <div class="row">
            <h2><?php echo $currentCategory['categoryName']; ?></h2>
        </div>
            <?php
            foreach($products as $product) {
                if($product instanceof Product) {?>
                    <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">
                        <a href="productPage.php?productId=<?php echo $product->getId(); ?>">
                            <img class="img-thumbnail" src="<?php echo $product->getImageFilePath(); ?>">
                            <h4><?php echo $product->getProductName(); ?></h4>
                            <h5>£ <?php echo $product->getProductPrice(); ?></h5>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
    </div>
</section>
</body>
</html>