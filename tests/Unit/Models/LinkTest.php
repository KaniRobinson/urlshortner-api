<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Link;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test to see if factory schema can create a record succesfully into the database.
     *
     * @return void
     */
    public function test_can_create_link()
    {
        $link = factory(Link::class)->create();

        $this->assertDatabaseHas('links', [
            'id' => $link->id
        ]);
    }
}
