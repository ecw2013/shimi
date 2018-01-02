<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::query()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = Product::query()->create($request->all());

        if ($request->hasFile('image')) {
            $product->picture_path = $request->file('image')->store('products');
            $product->save();
        }

        return redirect(route('admin.product.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());

        if ($request->hasFile('image')) {
            if (!is_null($product->picture_path)) {
                Storage::delete($product->picture_path);
            }
            $product->picture_path = $request->file('image')->store('products');
            $product->save();
        }

        return redirect(route('admin.product.edit', ['product' => $product]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        if (!is_null($product->picture_path)) {
            Storage::delete($product->picture_path);
        }

        $product->delete();

        return redirect(route('admin.product.index'));
    }
}
