<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index() {
        
        return view('products.index',[
            
            'products'=> Product::latest()->filter(request(['search']))->get()
                    
            ]);
    }

    public function show(Product $product){
        return view('products.show',[
            'product'=> $product
        ]);
    }
}
