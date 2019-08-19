<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     public function testGetAllProducts(){
       $products_object = Product::all();
       $products = json_decode(json_encode($products_object), true);
       $response = $this->get('api/products');
       $response
       ->assertStatus(200)
       ->assertJson([
         'status' => 'success',
         'products' => $products

       ]);

     }
     public function testGetOneProduct(){
       $id = 1;
       $product_object = Product::find($id);
       $product = json_decode(json_encode($product_object), true);
       $response = $this->get('api/products/'.$id);
       $response->assertStatus(200)->
       assertJson([
         'status' => 'success',
         'product' => $product
       ]);
     }

     public function testGetProductsByCategory(){
       $id = 1;
       $response = $this->get('api/products-by-category/'.$id);
       $response->assertStatus(200)->
       assertJson([
         'status' => 'success'
       ]);
     }
     //
     public function testGetProductsByBrand(){
       $id = 1;
       $response = $this->get('api/products-by-brand/'.$id);
       $response->assertStatus(200)->
       assertJson([
         'status' => 'success'
       ]);
     }

}
