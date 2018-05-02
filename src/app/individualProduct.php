<?php
require_once '../../vendor/autoload.php';
use Store\Category as Category;
use Store\DBConnect as DBConnect;
use Store\Store as Store;
$dBConnect = DBConnect::connectToDB();
Store::setPDO($dBConnect);
$categories = Store::getCategories();
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
        <div class="row col-xs-offset-4">
            <h2>Product Name</h2>
        </div>
        <div class="product-content">
            <div class="row">
                <div>
                    <img src="../assets/img/cat2.jpg" class="col-xs-6 col-xs-offset-2 col-sm-4 col-sm-offset-1">
                </div>
            </div>
            <div class="row">

                <div class="col-xs-6 col-xs-offset-2 col-sm-4 col-sm-offset-1">
                    <img src="../assets/img/cat2.jpg" class="img-thumbnail col-xs-6 col-sm-4">
                    <img src="../assets/img/cat2.jpg" class="img-thumbnail col-xs-6 col-sm-4">
                    <img src="../assets/img/cat2.jpg" class="img-thumbnail col-xs-6 col-sm-4">
                </div>

            </div>
            <div class="col-xs-6 col-xs-offset-2 col-sm-4 col-sm-offset-1">
                <div>
                    <strong class="col-xs-12 col-sm-12">Size</strong>
                    <input class="col-xs-12 col-sm-12" type="text" name="Size">
                </div>
                <div>
                    <strong class="col-xs-12 col-sm-12">Colour</strong>
                    <input class="col-xs-12 col-sm-12" type="text" name="Colour">
                </div>
            </div>
            <div class="col-xs-12 col-xs-offset-4 col-sm-12 col-sm-offset-2">
                <h5>Description</h5>
                <p>lorem epsum</p>
            </div>
            <div class="col-xs-12 col-xs-offset-4 col-sm-12 col-sm-offset-2">
                <span>Cost</span>
                <span>£5</span>
            </div>
        </div>
    </div>
</section>
</body>
</html>
