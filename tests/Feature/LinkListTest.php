<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkListTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test can list links
     *
     * @return void
     */
    public function test_can_list_links()
    {
        $this
            ->json('GET', '/api/links')
            ->assertStatus(200)
            ->assertJsonStructure([
                'data',
                'links',
                'meta',
            ]);
    }
}
