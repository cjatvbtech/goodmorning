<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Respons
     */
    public function create()
    {
        return view('admin.products.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, 
            ['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240']
        );

        $params = $request->only(['category_id', 'name', 'description', 'model', 'brand', 'image', 'type']);
        $params['image'] = $request->image->hashName();

        $request->image->store('public/products');

        try {
            Product::create($params);
            return redirect()->route('products-index')->with('message', 'Succesfuly added a product');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInputs();
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
        return Product::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $this->validate(
            $request, 
            ['image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:10240']
        );

        $params = $request->only(['category_id', 'name', 'description', 'model', 'brand', 'type']);

        if ($request->image) {
            $params['image'] = $request->image->hashName();
            $request->image->store('public/products');
        }

        try {
            $product->update($params);
            return redirect()->route('products-index')->with('message', 'Succesfuly updated a product');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInputs();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->delete()) {
            return redirect()->route('products-index')->with('message', 'Succesfully deleted a product');
        }

        return redirect()->route('products-index')->with('message', 'Unable to delete product');
    }
}
