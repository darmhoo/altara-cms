<?php

namespace Tests\Feature;

use Tests\TestCase;
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
       $response = $this->get('api/products');
       $response
       ->assertStatus(200)
       ->assertJson([
         'status' => 'success',

       ]);

     }
     public function testGetOneProduct(){
       $id = 1;
       $response = $this->get('api/products/{$id}');
       $response->assertStatus(200)->
       assertJson([
         'status' => 'success'
       ]);
     }

     public function testGetProductsByCategory(){
       $id = 1;
       $response = $this->get('api/products-by-category/{$id}');
       $response->assertStatus(200)->
       assertJson([
         'status' => 'success'
       ]);
     }

     public function testGetProductsByBrand(){
       $id = 1;
       $response = $this->get('api/products-by-brand/{$id}');
       $response->assertStatus(200)->
       assertJson([
         'status' => 'success'
       ]);
     }

}
