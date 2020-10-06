<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategory;
use Illuminate\Http\Request;
use App\Services\ProductService;


class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     *
     * @param ProductService $productService
     * @return \Illuminate\Http\Response
     */
    public function index(ProductService $productService)
    {
        return view('products.index', [
            'products' => $productService->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param StoreCategory $store
     * @param ProductService $productService
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StoreCategory $store, ProductService $productService)
    {
        $validated = $request->validate($store->rules(),$store->messages());
        $productService->create($validated);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
//     * @param $id
     * @param ProductService $productService
     * @return \Illuminate\Http\Response
     */
    public function show($id, ProductService $productService)
    {
        $product= $productService->find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @param ProductService $productService
     * @return \Illuminate\Http\Response
     */
    public function edit($id, ProductService $productService)
    {
        $product= $productService->find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param ProductService $productService
     * @param StoreCategory $store
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, ProductService $productService, StoreCategory $store)
    {
        $validated = $request->validate($store->rules(),$store->messages());
        $productService->update($id, $validated);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @param ProductService $productService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ProductService $productService)
    {
        $productService->destroy($id);
        return redirect()->route('products.index');
    }
}
