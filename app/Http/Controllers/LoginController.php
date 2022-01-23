<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
class LoginController extends Controller
{
    public function login(){
        return view('main/login');
    }
    public function create(){
        $logins = Login::all();
        return view('main/login',['logins'=>$logins]);
    }
    public function store(Request $request){
        $request->validate(['fullname'=>'required']);
        $request->validate(['username'=>'required']);
        $request->validate(['email'=>'required']);
        $request->validate(['password'=>'required']);

        $logins = new Login();

        $logins->fullname = $request->input('fullname');
        $logins->username = $request->input('username');
        $logins->email = $request->input('email');
        $logins->password = $request->input('password');

        $logins->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('login');
    }

    public function store_admin(Request $request){
        $request->validate(['email'=>'required']);
        $request->validate(['password'=>'required']);

        $logins = new Login_admin();

        $logins->email = $request->input('email');
        $logins->password = $request->input('password');

        return redirect('main');

    }
}
