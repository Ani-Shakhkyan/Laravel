<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Product;
class Products extends Controller
{
    

  
    public function index()
    {
        $products = Product::all()->toarray();
        return view('admin/products/index',[ 'products' => $products]);

    }
public function create()
    {
        return view('admin/products/create');

    }


public function store(Request $request)
{  
     $imageName = time().'.'.request()->image->getClientOriginalExtension();

    request()->image->move(public_path('images'), $imageName);
    $data = [
        'name' => $request->input('name') ,
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'image' =>$imageName,
        
    ];
 

    if(Product::insert($data)){
        return redirect()->route('products');
    }


}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $products = Product::find($id)->toarray();
    return view('admin/products/edit',[ 'product' => $products]);

}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request)
{
    $id = $request->input('id');
    $data = [
        'name' => $request->input('name') ,
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'image' => $request->input('image'),
    ];
    Product::find($id)->update($data);
    return redirect()->route('products');

}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    Product::destroy($id);
    return redirect()->route('products');

}
}