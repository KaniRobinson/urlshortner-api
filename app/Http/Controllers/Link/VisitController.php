<?php

namespace App\Http\Controllers\Link;

use App\Models\Link;
use Illuminate\Http\Request;
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
    public function __invoke(Request $request, Link $link)
    {
        $link
            ->visits()
            ->create([
                'ip_address' => $request->ip(),
                'country' => geoip()->getLocation($request->ip())['country'],
                'refereer_url' => $request->server('HTTP_REFERER'),
            ]);

        return Redirect::away($link->url);
    }
}
