<?php

namespace App\Http\Controllers\Link;

use App\Models\Link;
use App\Http\Controllers\Controller;
use App\Http\Resources\LinkResource;

class ViewController extends Controller
{
    /**
     * Handles the viewing of Link data
     *
     * @param Link $link
     * @return void
     */
    public function __invoke(Link $link)
    {
        return new LinkResource($link);
    }
}
