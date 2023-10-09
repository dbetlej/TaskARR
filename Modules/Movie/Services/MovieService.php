<?php

namespace Modules\Movie\Services;

use Modules\Movie\Entities\Movie;

class MovieService
{
    public function update(Movie $movie, $request): void
    {
        $movie->update($request->safe()->except('vod'));
        $movie->vod->sync($request->safe()->only('vod'));
    }
}
