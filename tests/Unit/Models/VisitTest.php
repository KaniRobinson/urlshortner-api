<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Link;
use App\Models\Visit;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VisitTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test to see if factory schema can create a record succesfully into the database.
     *
     * @return void
     */
    public function test_can_create_link()
    {
        $visit = factory(Visit::class)->create([
            'link_id' => factory(Link::class)->create()->id,
        ]);

        $this->assertDatabaseHas('visits', [
            'id' => $visit->id
        ]);
    }
}
