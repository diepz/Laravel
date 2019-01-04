<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 12/11/2018
 * Time: 14:32
 */
require '../Models/product.php';

    class ProductControllers
    {
        private $product;

        function __construct()
        {
            $this->product = new Product();
        }

        function invoke()
        {
            if (!isset($_GET['id'])) {
                $products = $this->product->getProductsList();
                include '../Views/products_list.php';
            } else {
                $product = $this->product->getProduct($_GET['id']);
                include '../Views/product.php';
            }
        }
    }