<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    //

    public function index()
    {
      $brands = DB::table('brands')->get();

      return response()->
      json([
        'status' => 'success',
        'brands' => $brands
      ]);
    }

}
