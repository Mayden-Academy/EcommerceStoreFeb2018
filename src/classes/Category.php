<?php

namespace Store;

class Category
{
    private $id;
    private $categoryName;
    private $defaultImageFilePath;
    private $defaultImageAlt;
    private $path = "./src/app/products.php?categoryId=";

    public function getId() {
        return $this->id;
    }

    public function getCategoryName() {
        return $this->categoryName;

    }

    /**
     * Generates html for category blocks.
     *
     * @return string
     */
    public function getCategoryImageLink():string {
        return "<div class=\"category col-xs-10 col-sm-6 col-md-4\">
                <a href='" .
                $this->path .
                $this->id .
                "'><img class='img-thumbnail' src='" .
                $this->defaultImageFilePath .
                "' alt='" .
                $this->defaultImageAlt .
                "'><h4>" .
                $this->categoryName .
                "</h4></a></div>";
    }
}
