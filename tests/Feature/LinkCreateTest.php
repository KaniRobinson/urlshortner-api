<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkCreateTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test can create a link
     *
     * @return void
     */
    public function test_can_create_link()
    {
        $this
            ->json('POST', '/api/links', [
                'url' => 'https://google.co.uk'
            ])
            ->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'token',
                    'link',
                    'url',
                    'created_at',
                    'updated_at',
                ]
            ]);
    }

    /**
     * Test can validate a link
     *
     * @return void
     */
    public function test_link_validation()
    {
        $this
            ->json('POST', '/api/links', [
                'url' => 'invalidurl'
            ])
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'url',
            ]);
    }
}
