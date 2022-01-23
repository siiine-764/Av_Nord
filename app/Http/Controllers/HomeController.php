<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Contact;
use App\Http\Controllers\HomeController;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function create_product(){
        $products = Product::all();
        return view('home',['products'=>$products]);
    }
    public function store_admin(Request $request){
        $request->validate(['title'=>'required']);
        $request->validate(['prix'=>'required']);
        $request->validate(['image'=>'required']);        


        $products = new Product();

        $products->title = $request->input('title');
        $products->prix = $request->input('prix');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/appsetting/', $filename);

            $pages->image = $filename;
        } else {
            $products->image = $request->input('image');
        }

        $products->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('home');
    }


    public function create(){
        $contacts = Contact::all();
        $products = Product::all();
        return view('welcome',['contacts'=>$contacts],['products'=>$products]);
    }
    public function store1(Request $request){
        $request->validate(['prenom'=>'required']);
        $request->validate(['nom'=>'required']);
        $request->validate(['adresse'=>'required']);
        $request->validate(['sujet'=>'required']);
        $request->validate(['message'=>'required']);

        $contacts = new Contact();

        $contacts->prenom = $request->input('prenom');
        $contacts->nom = $request->input('nom');
        $contacts->adresse = $request->input('adresse');
        $contacts->sujet = $request->input('sujet');
        $contacts->message = $request->input('message');

        $contacts->save();

        $request->session()->flash('status1', 'Task Add was successful!');

        return redirect('/');
    }
}
