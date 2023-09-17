<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\ProductModelo;
class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModelo();
    }

    public function product($product)
    {
        return $product;
    }

    public function dyze()
    {
        // return view('products');
        $data = $this->product->findAll();
        echo '<pre>';
        print_r($data);
    }
    public function index()
    {
        //
    }
}
