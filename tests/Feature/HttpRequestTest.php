<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HttpRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        Http::fake();
    }

    /** @test */
    public function playing_around_with_request_in_laravel_7()
    {
        $response2 = Http::post("https://jsonplaceholder.typicode.com/postuknownurl", [
            'userId' => 1,
        ]);

        dd($response2->json());
    }
}