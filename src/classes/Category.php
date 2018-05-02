<?php

namespace Store;

class Category
{
    private $id;
    private $categoryName;
    private $defaultImageFilePath;
    private $defaultImageAlt;

    public function getId() {
        return $this->id;
    }

    public function getCategoryName() {
        return $this->categoryName;
    }

    public function getDefaultImageFilePath() {
        return $this->defaultImageFilePath;
    }

    public function getDefaultImageAlt() {
        return $this->defaultImageAlt;
    }

}
