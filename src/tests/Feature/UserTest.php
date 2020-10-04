<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\UserProfile;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testuserstore()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/users', [
            'name' => 'tom', 
            'email' => 'gwe@dd.ig', 
            'desc' => 'phpunit test', 
            'rate' => 33,
            'cur' => "GBP"
        ]);

        $response->assertRedirect('/');
    }
}
