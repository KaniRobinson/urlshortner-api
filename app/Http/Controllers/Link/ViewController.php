<?php

namespace App\Http\Controllers\Link;

use App\Http\Controllers\Controller;

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
