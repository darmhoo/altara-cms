<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testProductsGetAllApi()
    {
        $response = $this->get('http://localhost:8000/api/products');
        $response->assertSuccessful();
        $response->assertJsonCount(2);


    }
    public function testProductGetOneApi()
    {
        $response = $this->get('http://localhost:8000/api/products/100');
        $response->assertSuccessful();
        $response->assertJsonCount(1);

    }

    public function testProductCreate()
    {

    }
}
