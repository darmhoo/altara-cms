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

}
