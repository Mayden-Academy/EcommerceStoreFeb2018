<?php

namespace Store;

class Category {
    private $id;
    private $categoryName;
    private $defaultImagePath;
    private $defaultImageAlt;
    private $path = "/src/app/categories.php?id=";

    public function getCategoryListLink(){
        return "<a href='" . $this->path . $this->id. "' >" . $this->categoryName . "</a><br>";
    }

    public function getCategoryImageLink(){
        return "<a href='" . $this->path . $this->id. "' >" . $this->categoryName . "</a><br>";
    }

    //display categoryImage
}
