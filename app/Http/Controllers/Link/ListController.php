<?php

namespace App\Http\Controllers\Link;

use App\Models\Link;
use App\Http\Controllers\Controller;
use App\Http\Resources\LinkResource;

class ListController extends Controller
{
    /**
     * Handles Listing of Links
     *
     * @return void
     */
    public function __invoke()
    {
        $links = Link::latest()
            ->paginate();

        return LinkResource::collection($links);
    }
}
