<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoeryRequest;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    function create(){
        return view('category.create');
    }
    function store(CategoryRequest $req){
        dd($req->all());
    }
}
