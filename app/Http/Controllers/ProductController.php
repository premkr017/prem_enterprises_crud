<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255|unique:products,sku',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',


        ]);


        if ($validator->fails()) {
            return redirect(route('products.create'))->withErrors($validator)->withInput();
        }
// $validator = Validator::make($request->all(), [
//     'name' => 'required|string|max:255',
//     'description' => 'nullable|string',
//     'price' => 'required|numeric|min:0',
//     'status' => 'required|in:active,inactive',
//     "image" => 'image|mimes:jpeg,png,jpg|max:2048',
// ]);

        // if ($validator->fails()) {
        //     return redirect(route('products/create'))->withErrors($validator)->withInput();
        // }   

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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
