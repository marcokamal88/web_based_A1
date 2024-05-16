<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmitArFormTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $response = $this->from('/ar')->followingRedirects()
            ->json('POST', '/store', [
                "email" => "marct333rrr33est3o@gmail.com",
                'userName' => 'mart4rr4estco123',
                'fname' => 'marco kamal',
                'pwd' => "marcoss17228",
                'address' => '15 makka',
                'brithday' => "2024-05-30",
                'phone' => '01202792325'
            ]);
        $response->assertSee('تم الانشاء بنجاح');
    }
}
