<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function entreproduct(){
        $products = Product::all();
        return view('home',['products'=>$products]);
    }
    public function store_admin(Request $request){
        $request->validate(['title'=>'required']);
        $request->validate(['prix'=>'required']);
        $request->validate(['img'=>'required']);

        $logins = new Login();

        $logins->fullname = $request->input('title');
        $logins->username = $request->input('prix');
        $logins->email = $request->input('img');

        $logins->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('home');
    }

}
