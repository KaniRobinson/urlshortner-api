<?php

namespace App\Http\Controllers\Visit;

use App\Models\Link;
use App\Http\Controllers\Controller;
use App\Http\Resources\VisitResource;

class ListController extends Controller
{
    /**
     * Handles the list of visits from a link
     *
     * @param Link $link
     * @return void
     */
    public function __invoke(Link $link)
    {
        $visits = $link
            ->visits()
            ->latest()
            ->paginate();

        return VisitResource::collection($visits);
    }
}
