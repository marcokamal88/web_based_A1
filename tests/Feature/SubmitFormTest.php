<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmitFormTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $response = $this->from('/en')->followingRedirects()
            ->json('POST', '/store', [
                "email" => "marct3eeee33rrr33est3o@gmail.com",
                'userName' => 'mar4444t4rr4estco123',
                'fname' => 'marco kamal',
                'pwd' => "marcoss17228",
                'address' => '15 makka',
                'brithday' => "2024-05-30",
                'phone' => '01202792325'
            ]);
        $response->assertSee('Registered Successfully!');
    }
}
