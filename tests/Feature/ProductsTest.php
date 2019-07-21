<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAllProductsApi()
    {
        $response = $this->get('http://localhost:8000/api/products');
        $response->assertStatus(200);

    }
    public function testSingleProduct()
    {
        $response = $this->get('http://localhost:8000/api/products/show/{$id}', ['id'=> 1]);
        $response->assertStatus(200);
    }
}
