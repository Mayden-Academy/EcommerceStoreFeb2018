<?php
require_once '../../classes/Category.php';
use PHPUnit\Framework\TestCase;

class CategoryTest extends Testcase
{
    public function testCategoryObject()
    {
        $categoryObject = new \Store\Category();
        $this->assertTrue(is_object($categoryObject));
    }
}