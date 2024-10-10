<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view('');
    }

    public function add(){
        $addprod = Product::create([
            'product_name' => $req->product_name,  
            'desc' => $req->desc,
            'cat_id' => $req->cat_id,
            'photo' => $req->photo 
        ]);
        return view('');
    }

    public function edit(){
        $updateprod = Product::where('product_id', $req->id)->update([
            'product_name' => $req->product_name,
            'desc' => $req->desc,
            'cat_id' => $req->cat_id,
            'photo' => $req->photo
        ]);
        return view('');
    }

    public function delete(){
        $deleteprod = Product::where('product_id', $req->id)->delete();
        return view('');
    }
}
