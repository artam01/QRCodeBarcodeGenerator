<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products=product::all();
        return view('index',compact('products'));
    }
    public function create(){

        return view('create');
    }
    public function store(Request $request){
       
        $number=mt_rand(100000,99999999);
        
        if($this->productCodeExist($number)){
            $number=mt_rand(100000,99999999);
        }
        $request['product_code'] = $number;
        
        Product::create($request->all());
        
        return redirect('/');
    }

    public function productCodeExist($number){
        return product::whereProductCode($number)->exists();
    }

}