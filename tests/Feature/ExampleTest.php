<?php
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}