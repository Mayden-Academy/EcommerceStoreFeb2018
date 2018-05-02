<?php
require_once '../../vendor/autoload.php';
use Store\mySqlDbConnect as mySqlDbConnect;
use Store\Store as Store;
use Store\Category as Category;

$mySqlCon = new mySqlDbConnect();
$store = new Store($mySqlCon);
$categories = $store->getCategories();

$id = $_GET["productId"];

$product = $store->getProductPage($id);

$product->setDb($mySqlCon);
$productImageArray = $product->getImages($id);
var_dump($product->getAvailableColors());
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
        <div class="row col-xs-offset-4">
            <h2><?php echo $product->getProductName()?></h2>
        </div>
        <div class="product-content">
            <div class="row">
                <div>
                    <img src="<?php echo $product->getImageFilePath()?>" class="col-xs-6 col-xs-offset-2 col-sm-4 col-sm-offset-1">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-2 col-sm-4 col-sm-offset-1">
                    <img src="<?php if (array_key_exists(0,$productImageArray)) {
                        echo $productImageArray[0]["imageFilePath"];
                    } else echo $product->getImageFilePath()?>" class="img-thumbnail col-xs-6 col-sm-4">
                    <img src="<?php if (array_key_exists(1,$productImageArray)) {
                        echo $productImageArray[1]["imageFilePath"];
                    } else echo $product->getImageFilePath()?>" class="img-thumbnail col-xs-6 col-sm-4">
                    <img src="<?php if (array_key_exists(2,$productImageArray)) {
                        echo $productImageArray[2]["imageFilePath"];
                    } else echo $product->getImageFilePath()?>" class="img-thumbnail col-xs-6 col-sm-4">
                </div>
            </div>
            <div class="col-xs-6 col-xs-offset-2 col-sm-4 col-sm-offset-1">
                <div>
                    <strong class="col-xs-12 col-sm-12">Size</strong>
                    <select class="col-xs-12 col-sm-12">
                        <option value="small">Small</option>
                        <option value="med">Medium</option>
                        <option value="lrg">Large</option>
                    </select>
                </div>
                <div>
                    <strong class="col-xs-12 col-sm-12">Colour</strong>
                    <select class="col-xs-12 col-sm-12">
                        <option value="blue">Blue</option>
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-xs-offset-4 col-sm-12 col-sm-offset-2">
                <h5>Description</h5>
                <p><?php echo $product->getProductDescription()?></p>
            </div>
            <div class="col-xs-12 col-xs-offset-4 col-sm-12 col-sm-offset-2">
                <span>Cost</span>
                <span>£<?php echo $product->getProductPrice()?></span>
            </div>
        </div>
    </div>
</section>
</body>
</html>
