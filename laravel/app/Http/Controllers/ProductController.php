<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products =Product::query()->paginate(8);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $product = new Product();
        return view('product.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //
        $formFields = $request->validated();
        if($request->hasFile('image')){
               $formFields['image'] = $request->file('image')->store('product','public');
        }

        Product::create($formFields);
        return redirect('/products')->with('success', 'product has been added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('product.edit',compact('product'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
           $product->fill($request->validated())->save();
           return redirect('/products')->with('success','product has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect('/products')->with('success', 'product has been deleted successfully!');
    }
}
