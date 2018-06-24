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
    	$this->middleware('auth:api')
    		->except(['index', 'show']);
    }

    public function index()
    {
        $categories = Category::all();
        $brands = Brand::all();

    	return response()
    		->json([
                'categories' => $categories,
                'brands' => $brands
    		]);
    }
}

