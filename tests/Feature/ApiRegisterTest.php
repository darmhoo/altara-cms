<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiRegisterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterAUser()
    {

        $user = [
            'first_name' => 'Timothy',
            'last_name' => 'Adeniyi',
            'role_id' => '1',
            'email' => 'ibrahim@ter.com',
            'password' => 'larmi',

        ];

        $response = $this->post('http://localhost:8000/api/register', $user);
        $response->assertStatus('201');

    }
}
