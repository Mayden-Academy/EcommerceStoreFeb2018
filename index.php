<?php
require_once __DIR__ . '/vendor/autoload.php';
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
    <link rel="stylesheet" type="text/css" href="src/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src/assets/css/styles.css">
</head>
<body>
<!--    <div class="row">-->
<!--        <nav class="navbar-fixed-top col-xs-9 col-sm-10 col-xs-offset-3 col-sm-offset-2">-->
<!--            <h1>Totally Pawesome</h1>-->
<!--        </nav>-->
<!--    </div>-->
<!--    <aside class="col-xs-3 col-sm-2">-->
<!--        <a href="#">-->
<!--            <h2>Home</h2>-->
<!--        </a>-->
<!--        --><?php
//        foreach($categories as $category) {
//            if($category instanceof Category) {
//                echo $category->getCategoryListLink();
//            }
//        }
//        ?>
<!--    </aside>-->
<!--    <main class="container col-xs-offset-3 col-sm-offset-2">-->
<!--        <div class="row">-->
<!--            <h1>Categories</h1>-->
<!--            --><?php
//            foreach($categories as $category) {
//                if($category instanceof Category) {
//                    echo $category->getCategoryImageLink();
//                }
//            }
//            ?>
<!--        </div>-->
<!--    </main>-->
<!---->
<!--<body>-->
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

<!--        <a href="#">-->
<!--            <h4>Category1</h4>-->
<!--        </a>-->
<!--        <a href="#">-->
<!--            <h4>Category2</h4>-->
<!--        </a>-->
<!--        <a href="#">-->
<!--            <h4>Category3</h4>-->
<!--        </a>-->
<!--        <a href="#">-->
<!--            <h4>Category4</h4>-->
<!--        </a>-->
<!--        <a href="#">-->
<!--            <h4>Category5</h4>-->
<!--        </a>-->
<!--        <a href="#">-->
<!--            <h4>Category6</h4>-->
<!--        </a>-->
    </div>
    <div class="main-content col-xs-9 col-sm-10">
        <div class="row">
            <h2>Categories</h2>
        </div>
        <div class="row index-tiles">

            <?php
            foreach($categories as $category) {
                if($category instanceof Category) {
                    echo $category->getCategoryImageLink();
                }
            }
            ?>


<!--            <div class="category col-xs-10 col-sm-6 col-md-4">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="src/assets/img/cat1.jpg">-->
<!--                    <h4>Category 1</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="category col-xs-10 col-sm-6 col-md-4">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="src/assets/img/cat1.jpg">-->
<!--                    <h4>Category 2</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="category col-xs-10 col-sm-6 col-md-4">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="src/assets/img/cat1.jpg">-->
<!--                    <h4>Category 3</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="category col-xs-10 col-sm-6 col-md-4">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="src/assets/img/cat1.jpg">-->
<!--                    <h4>Category 4</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="category col-xs-10 col-sm-6 col-md-4">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="src/assets/img/cat1.jpg">-->
<!--                    <h4>Category 5</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="category col-xs-10 col-sm-6 col-md-4">-->
<!--                <a href="#">-->
<!--                    <img class="img-thumbnail" src="src/assets/img/cat1.jpg">-->
<!--                    <h4>Category 6</h4>-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>
</section>

</body>
</html>