<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth:api')
    		->except(['index', 'show']);
    }

    public function index()
    {
    	$products = Product::orderBy('created_at', 'desc')
    		->get(['user_id','make', 'name', 'pcategory','features', 'price','rprice', 'image']);

    	return response()
    		->json([
    			'products' => $products
    		]);
    }
}
