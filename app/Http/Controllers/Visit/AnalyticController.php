<?php

namespace App\Http\Controllers\Visit;

use Carbon\Carbon;
use App\Models\Link;
use App\Http\Controllers\Controller;
use App\Http\Resources\VisitAnalyticResource;

class AnalyticController extends Controller
{
    public function __invoke(Link $link)
    {
        $visits = $link
            ->visits()
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('Y-m-d');
            });

        return [
            'labels' => array_keys($visits->toArray()),
            'data' => array_values($visits
                ->map(function($record) {
                    return $record->count();
                })->toArray())
        ];
    }
}
