<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.index');
    }

    public function edit($id)
    {

        return view('product.edit',['id' => $id]);
    }

    public function create(){
        return view('product.create');


    }

    public function show($id){
        return view('product.view', ['id' => $id]);
    }
}
