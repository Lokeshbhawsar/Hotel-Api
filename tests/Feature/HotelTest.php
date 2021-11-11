<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HotelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_case()
    {
        $response = $this->get('get_hotel/#$');

        $response->assertStatus(200);
    }
}
