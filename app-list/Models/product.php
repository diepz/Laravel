<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 12/11/2018
 * Time: 14:26
 */

class Product
{
    public $id;
    public $products;
    public $price;
    public $Product_description;
    public $producer;


    public function __construct($id = null, $products = null , $price = null)
    {
        $this->id = $id;
        $this->products = $products;
        $this->price = $price;

    }


    public function getProductsList()
    {
        return [
            new Product(1,'I 3 con sau',20000),
            new Product(2,'L koten',20000000),

        ];

    }

    function getProduct($id)
    {
        $productList = $this->getProductsList();
        foreach ($productList as $product) {
            if ($product->id == $id) {
                return $product;
            }
        }
    }
}