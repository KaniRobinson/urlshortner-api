<?php

namespace App\Http\Controllers\Link;

use App\Models\Link;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class VisitController extends Controller
{
    /**
     * Handles the redirect from the link token
     *
     * @param Link $link
     * @return void
     */
    public function __invoke(Link $link)
    {
        return Redirect::away($link->url);
    }
}
