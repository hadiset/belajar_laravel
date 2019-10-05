<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll(){
        return view('product.display');
    }

    public function show($id=1){
        return 'Menampilkan barang dengan id '.$id;
    }

    public function saveNew(){
        return 'Data baru tersimpan';
    }

    public function search(Request $request){
        $keyword = $request->input("q");
        // $all = $request->all();
        
        return 'Mencari '.$keyword;
        // return $all;
    }
}
