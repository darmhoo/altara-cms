<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
      $categories = Category::all();

      return response()->
      json([
        'status' => 'success',
        'categories' => $categories
      ]);
    }
    
}
