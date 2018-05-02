<?php

namespace Store;

class Category
{
    private $id;
    private $categoryName;
    private $defaultImageFilePath;
    private $defaultImageAlt;
    private $path = "/src/app/categories.php?id=";

    /**
     * Generates html for category list.
     *
     * @return string
     */
    public function getCategoryListLink():string {
        return "<a href='" .
            $this->path .
            $this->id .
            "' ><h5>" .
            $this->categoryName .
            "</h5></a><br>";
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
