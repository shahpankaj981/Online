<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProductRequest;
use App\Product;
use App\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user     = User::first();
        $products = $user->products;

        return view("products.index",compact("products"));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view("products.show",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['product_category_id']='23';

            Product::create($data);
            return redirect('products');

        /*$products = new Product();
        $products->name = $data['name'];
        $products->price = $data['price'];
        $products->product_category_id = $data['product_category_id'];

        $products->save();*/



        /* Query to create:

        $query = DB::raw("insert into 'products' (name, price, product_category_id) values ({$data['name']}, {$data['price']}, {$data['product_category_id']}");
        $query->execute();
        */

       // Product::create($data); //eloquent use garera create gareko
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, ProductRequest $request)
    {
        $products = Product::findOrFail($id);

        $products->update($request->all());

        return redirect ('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
