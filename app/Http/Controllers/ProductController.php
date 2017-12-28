<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index', [
            'products' => Product::query()->paginate(config('app.paginate_limit', 6)),
            'page' => 'products',
            'keywords' => config('app.keywords'),
            'description' => config('app.description'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Product $product)
    {
        return view('product.show', ['product' => $product,
            'page' => 'products',
            'keywords' => $product->keywords,
            'description' => $product->description,
        ]);
    }
}
