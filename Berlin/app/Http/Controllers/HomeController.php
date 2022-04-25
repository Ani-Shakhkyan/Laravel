<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
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
    public function test()
    {
        return view('test');
    }
  
    public function about(){
        return view("about");
    } 
    public function product(){

        $products = Product::all()->toarray();
        return view('product',[ 'products' => $products]);

       
    } 
    public function ej(){
        $users = User::all()->toarray();
        return view('ej',[ 'users' => $users]);
    } 
    
}

