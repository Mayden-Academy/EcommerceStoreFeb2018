<?php

namespace Store;

class Category {
    private $id;
    private $categoryName;
    private $defaultImageFilePath;
    private $defaultImageAlt;
    private $path = "/src/app/categories.php?id=";

    public function getCategoryListLink(){
        return "<a href='" . $this->path . $this->id. "' >" . $this->categoryName . "</a><br>";
    }

    public function getCategoryImageLink(){
        return "<div class=\"col-xs-8 col-sm-4\">
                <a href='" .
                $this->path . $this->id .
                "'><img class='img-thumbnail' src='".
                $this->defaultImageFilePath.
                "' alt='" .
                $this->defaultImageAlt .
                "'><h4>" .
                $this->categoryName .
                "</h4></a></div>";
    }
}
