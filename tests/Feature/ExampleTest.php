<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    

    public function test_after_login_verified()
    {
        $user = factory(User::class)->create();
        $this->ActingAs($user);
        $this->get('/home')->assertRedirect('/');
    }

    public function test_login_user_can_access_home_page_if_verified()
    {
        $user = factory(User::class)->create(['isVerified' => 1]);
        $this->ActingAs($user);
        $this->get('/home')->assertStatus(200);
    }

    
}
