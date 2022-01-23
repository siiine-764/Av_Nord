<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Main;
class MainController extends Controller
{
    public function main(){
        return view('main.pagemain');
    }
    /*public function create_list(){
        $products = Product::all();
        return view('main.pagemain',['products'=>$products]);
    }*/
}