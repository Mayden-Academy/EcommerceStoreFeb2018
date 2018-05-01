
<?php

require_once '../../vendor/autoload.php';
use Store\Category as Category;
use Store\Product as Product;
use Store\DBConnect as DBConnect;
use Store\Store as Store;

$dBConnect = DBConnect::connectToDB();
Store::setPDO($dBConnect);
$categories = Store::getCategories();
$products = Store::getProducts($_GET['id']);

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
        <a href="#">
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
            if($category instanceof Category) {
                echo $category->getCategoryListLink();
            }
        }
        ?>
    </div>
    <div class="main-content col-xs-9 col-sm-10">
        <div class="row">
            <h2>Product Category</h2>
        </div>

            <?php
            foreach($products as $product) {
                if($product instanceof Product) { ?>
                    <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">
                        <a href="#">
                            <img class="img-thumbnail" src="../assets/img/cat2.jpg">
                            <h4><?php echo $product->getProductName(); ?></h4>
                            <h5>£ <?php echo $product->getProductPrice(); ?></h5>
                        </a>
                    </div>
        <?php
                }
            }
            ?>
<!--        <div class="row">-->
<!--            <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-10 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-8 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-8 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-8 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="product col-xs-8 col-sm-6 col-md-4 col-lg-3">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="../assets/img/cat2.jpg">-->
<!--                    <h4>Product Name</h4>-->
<!--                    <h5>£00.00</h5>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>
</body>
</html>
