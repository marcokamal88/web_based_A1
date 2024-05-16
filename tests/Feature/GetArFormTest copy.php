<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetArFormTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_get_en_form(): void
    {
        $response = $this->get('/ar');

        $response->assertSee("Create New Account");
    }
}
