<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_cat;

class ProductCatController extends Controller
{
    //
    public function index()
    {
        return view('');
    }
    public function create()
    {
        $addprodcat = Product_cat::create([
            'cat_name' => $req->cat_name,
            'desc' => $req->desc,
        ]);
        return view('');
    }

    public function edit()
    {
        $updateprodcat = Product_cat::where('cat_id', $req->id)->update([
            'cat_name' => $req->cat_name,
            'desc' => $req->desc,
        ]);
        return view('');
    }
    public function delete(){
        $deleteprodcat = Product_cat::where('cat_id', $req->id)->delete();
        return view('');
    }
}
