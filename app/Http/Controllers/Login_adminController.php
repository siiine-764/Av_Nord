<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login_admin;

class Login_adminController extends Controller
{
    public function store_admin(Request $request){
        $request->validate(['email'=>'required']);
        $request->validate(['password'=>'required']);

        $logins = new Login_admin();

        $logins->email = $request->input('email');
        $logins->password = $request->input('password');

        $logins->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('login');

    }
}
