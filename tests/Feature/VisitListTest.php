<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Link;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VisitListTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test can list visits
     *
     * @return void
     */
    public function test_can_list_visits()
    {
        $link = factory(Link::class)->create();

        $this
            ->json('GET', '/api/visits/' . $link->token)
            ->assertStatus(200)
            ->assertJsonStructure([
                'data',
                'links',
                'meta',
            ]);
    }

    /**
     * Test a bad link that doesn't exist
     *
     * @return void
     */
    public function test_404_visits()
    {
        $this
            ->json('GET', '/api/visits/123123')
            ->assertStatus(404);
    }
}
