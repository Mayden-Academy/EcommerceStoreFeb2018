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
        <div class="row">
            <h2 class="text-center">Product Name</h2>
        </div>
        <div class="row index-tiles">
            <div>
                <img src="../assets/img/cat2.jpg" class="center-block">
            </div>
            <div class="row col-xs-12  ">
                    <img src="../assets/img/cat2.jpg">
                    <img src="../assets/img/cat2.jpg" >
                    <img src="../assets/img/cat2.jpg">
            </div>
            <div class="col-xs-12">
                <input type="text" name="Size">
                <input type="text" name="Colour">
            </div>
            <p></p>
            <h5></h5>
        </div>
    </div>
</section>
</body>
</html>
