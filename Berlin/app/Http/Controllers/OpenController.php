<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
    public function index(){
        return view("index");
    } 
    public function welcome(){
        return view("welcome");
    } 
    public function abousst(){
        return view("about");
    } 
    public function abosut(){
        return view("about");
    } 
    public function abosssut(){
        return view("about");
    } 
    public function about(){
        return view("about");
    } 
    public function profile(){
        return view("profile");
    } 
}

