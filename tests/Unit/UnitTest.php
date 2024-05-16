<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UnitTest extends TestCase
{
  

   

    public function it_does_not_allow_duplicate_email_registration()
    {
        User::create([
            'email' => 'test@example.com',
            'userName' => 'uniqueuser1',
            'password' => bcrypt('password'),
            'fullName' => 'Test User',
            'numberPhone' => '1234567890',
            'address' => '123 Test St',
            'brithdate' => '2000-01-01',
        ]);

        $response = $this->post('/store', [
            'email' => 'test@example.com',
            'userName' => 'uniqueuser2',
            'fname' => 'Another User',
            'phone' => '0987654321',
            'address' => '456 Test Ave',
            'pwd' => 'password',
            'conpwd' => 'password',
            'userImg' => null,
            'brithday' => '1990-01-01',
        ]);

        $response->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function it_does_not_allow_duplicate_username_registration()
    {
        User::create([
            'email' => 'unique@example.com',
            'userName' => 'testuser',
            'password' => bcrypt('password'),
            'fname' => 'Test User',
            'phone' => '1234567890',
            'address' => '123 Test St',
            'brithday' => '2000-01-01',
        ]);

        $response = $this->post('/store', [
            'email' => 'another@example.com',
            'userName' => 'testuser',
            'fname' => 'Another User',
            'phone' => '0987654321',
            'address' => '456 Test Ave',
            'pwd' => 'password',
            'conpwd' => 'password',
            'userImg' => null,
            'brithday' => '1990-01-01',
        ]);

        $response->assertSessionHasErrors(['userName']);
    }
}