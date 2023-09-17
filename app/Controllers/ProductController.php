<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{

    public function product($product)
    {
        return $product;
    }

    public function dyze()
    {
        return view('products');
    }
    public function index()
    {
        //
    }
}
