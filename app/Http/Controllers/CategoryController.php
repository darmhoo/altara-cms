<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
      $categories = DB::table('categories')->get();

      return response()->
      json([
        'status' => 'success',
        'categories' => $categories
      ]);
    }
}
