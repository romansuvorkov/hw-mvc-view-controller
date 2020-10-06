<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param ProductService $productService
     * @return \Illuminate\Http\Response
     */
    public function index(ProductService $productService) {
        $products = $productService->all();
        return view('client.index', compact('products'));
    }
}
