<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
      $products = Product::all();
      return response()->
      json([
        'status' => 'success',
        'products' => $products
      ]);
    }

    public function show($id)
    {
      $product = Product::find($id);

      return response()->
      json([
        'status' => 'success',
        'product' => $product
      ]);
    }

    public function showByBrand($brand_id)
    {
      $products = Product::where('brand_id', $brand_id)
      ->get();
      return response()->
      json([
        'status' => 'success',
        'products' => $products
      ]);
    }

    public function showByCategory($category_id)
    {
      $products = Product::where('category_id', $category_id)
      ->get();
      return response()->
      json([
        'status' => 'success',
        'products' => $products
      ]);
    }
   }
