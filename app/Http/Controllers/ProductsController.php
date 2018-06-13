<?php

namespace App\Http\Controllers;
use App\Product;
use App\Brand;
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
        $products = Product::orderByRaw('RAND()')->take(12)->get();
        // $nproducts = array();
        // foreach($products as $val){
        //     $brand = Brand::find($val->brand_id);
        //     $nproducts[] = $brand;
        //     }

    	return response()
    		->json([
                'products' => $products,
                // 'brand'=> $nproducts

    		]);
    }

    public function show($id)
    {
        $products = Product::where('category_id', $id)->get();
        // $categories = Product::select('name','surname')->where('id', 1)->get();
        // $recipe = Recipe::with(['user', 'ingredients', 'directions'])
        //     ->findOrFail($id);

        return response()
            ->json([
                'products' => $products
            ]);
    }

}
