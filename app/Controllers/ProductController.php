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

    public function edit($id)
    {
        $data = [
        'product' => $this->product->findAll(),
        'pro' => $this->product->where('id', $id)->first()
    ];
        return view('products', $data);
        
    }

    public function product($product)
    {
        return $product;
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function save()
    {  
        $id = $_POST['id'];
        $data = [
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
         ];
        if ($id != null){
        $this->product->set($data)->where('id',$id)->update($data);
            
        }else{
        $this->product->save($data);
            
        }
      
        return redirect()->to('/product');
    }
    public function dyze()
    {
        // return view('products');
        $data['product'] = $this->product->findAll();
        // echo '<pre>';
        // print_r($data);
        return view('products', $data);
    }
    public function index()
    {
        //
    }
}
