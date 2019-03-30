<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class EmailTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_otp_email_send_when_user_is_logged_in()
    {
        // $this->withoutExceptionHandling();

        // $user = factory(User::class)->create();
        // $response = $this->post('/login', ['email' => $user->email, 'password' => 'secret']);
        // $response->assertRedirect('/');
    }
}
