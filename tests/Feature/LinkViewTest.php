<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Link;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkViewTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test can view a link
     *
     * @return void
     */
    public function test_can_view_link()
    {
        $link = factory(Link::class)->create();

        $this
            ->json('GET', '/api/links/' . $link->token)
            ->assertStatus(200)
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
     * Test a bad link that doesn't exist
     *
     * @return void
     */
    public function test_404_link()
    {
        $this
            ->json('GET', '/api/links/123123')
            ->assertStatus(404);
    }
}
