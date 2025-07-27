<?php

namespace App\Services;
use App\Models\Product;


class ProductService
{
    public function create(array $data){
        $product_data=[
            'code'=>$data['code'],
            'name'=>$data['name'],
            'category'=>$data['category'],
            'quantity'=>$data['quantity'],
            'price'=>$data['price'],
        ];
        Product::create($product_data);
    }
    public function getAll(){
        $products=Product::all();
        return $products;
    }
    public function findById($id){
       $products=Product::find($id);
       return $products;
    }
    public function update(array $data){

        $id=$data['id'];
        $products=Product::find($id);
        $products->code=$data['code'];
        $products->name=$data['name'];
        $products->category=$data['category'];
        $products->quantity=$data['quantity'];
        $products->price=$data['price'];
        $products->save();
    }
    public function delete($id){
        $products=Product::find($id);
        $products->delete();
    }
}
