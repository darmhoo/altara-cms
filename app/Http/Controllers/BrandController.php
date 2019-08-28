<?php

namespace App\Http\Controllers;
use App\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    //

    public function index()
    {
      $brands = Brand::all();

      return response()->
      json([
        'status' => 'success',
        'brands' => $brands
      ]);
    }

}
