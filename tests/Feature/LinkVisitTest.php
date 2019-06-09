<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Link;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkVisitTest extends TestCase
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
            ->get('/' . $link->token)
            ->assertRedirect($link->url);
    }

    /**
     * Test a bad link that doesn't exist
     *
     * @return void
     */
    public function test_404_link()
    {
        $this
            ->get('/123123')
            ->assertStatus(404);
    }
}
