<?php

require_once '../../classes/Product.php';
use PHPUnit\Framework\TestCase;

//use store\Product;

class ProductTest extends TestCase
{

    public function testproductIsObject()
    {
        $case = new \Store\Productz();
        $expected = true;
        $this->assertEquals(is_object($case), $expected);
    }
//  Not testing Product methods because are only getters. Would need to use ReflectionClass to make
// private properties public and set them manually. See: http://www.webtipblog.com/unit-testing-private-methods-and-properties-with-phpunit/
}


