<?php

namespace App\Http\Controllers\Link;

use App\Models\Link;
use App\Http\Controllers\Controller;
use App\Http\Resources\LinkResource;
use App\Http\Requests\Link\CreateRequest;

class CreateController extends Controller
{
    /**
     * Handles the creation of a new link
     *
     * @param CreateRequest $request
     * @return \App\Http\Resources\LinkResource
     */
    public function __invoke(CreateRequest $request) : \App\Http\Resources\LinkResource
    {
        do {
            $token = str_random();
        } while (Link::where('token', $token)->first());

        $link = Link::create([
            'url' => $request->input('url'),
            'token' => $token,
        ]);

        return new LinkResource($link);
    }
}
