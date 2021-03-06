<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestCompanies extends TestCase
{
    /** @test */
    public function HomeBasicTest()
    {
        // home page test
        $response = $this->call('GET', '/companies');
        $this->assertEquals(200, $response->status());
    }
     /** @test */
    public function HomeFailTest()
    {
        // home page test
        $response = $this->call('POST', '/companies');
        $this->assertEquals(405, $response->status());
    }
}
