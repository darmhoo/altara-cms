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
            'first_name' => 'timothy',
            'last_name' => 'joseph',
            'role_id' => 1,
            'email' => 'darmhoo@usman.com',
            'password' => 'larami'
        ];
        $response = $this->post('http://localhost:8000/api/register', $user);
        $response->assertStatus(201);
        $response->assertJson([
            'registered' => true,
            'username' => $user['first_name'].' '.$user['last_name']
        ]);
    }
}
