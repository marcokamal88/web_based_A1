<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Support\Facades\App;
use Tests\TestCase;

class GetEnFormTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_get_en_form(): void
    {
        if(App::getLocale() == 'en'){
            $response = $this->json('GET', '/en');

            $response->assertSee("Create New Account");
    
        }else{
            $response = $this->json('GET', '/ar');

            $response->assertSee("انشاء حساب جديد");
    
        }
    }
}
