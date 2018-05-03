<?php

namespace Store;

class Category
{
    private $id;
    private $categoryName;
    private $defaultImageFilePath;
    private $defaultImageAlt;

    public function getId():int
    {
        return $this->id;
    }

    public function getCategoryName():string
    {
        return $this->categoryName;
    }

    public function getDefaultImageFilePath():string
    {
        return $this->defaultImageFilePath;
    }

    public function getDefaultImageAlt():string
    {
        return $this->defaultImageAlt;
    }
}
