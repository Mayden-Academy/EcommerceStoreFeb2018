<?php require_once __DIR__ . '/vendor/autoload.php';
use Store\Category as Category;
use Store\DBConnect as DBConnect;
use Store\Store as Store;
$dBConnect = DBConnect::connectToDB();
$store = new Store($dBConnect);
$categories = $store->getCategories();

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
    <div class="row">
        <nav class="navbar-fixed-top col-xs-9 col-sm-10 col-xs-offset-3 col-sm-offset-2">
            <h1>Totally Pawesome</h1>
        </nav>
    </div>
    <aside class="col-xs-3 col-sm-2">
        <a href="#">
            <h2>Home</h2>
        </a>
        <?php
        foreach($categories as $category) {
            if($category instanceof Category) {
                echo $category->getCategoryListLink();
            }
        }
        ?>
    </aside>
    <main class="container col-xs-offset-3 col-sm-offset-2">
        <div class="row">
            <h1>Categories</h1>
            <?php
            foreach($categories as $category) {
                if($category instanceof Category) {
                    echo $category->getCategoryImageLink();
                }
            }
            ?>
        </div>
    </main>
</body>
</html>
