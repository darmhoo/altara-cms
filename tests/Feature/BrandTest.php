<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\DB;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BrandTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetAllBrands()
    {
      $response = $this->get('api/brands');
      $brands = DB::table('brands')->get();

      $response->assertStatus(200)->
      assertJsonCount(2);
    }
}
