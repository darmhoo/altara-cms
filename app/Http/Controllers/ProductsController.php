<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
      $products = DB::table('products')->get();
      return response()->
      json([
        'status' => 'success',
        'products' => $products
      ]);
    }
   }
