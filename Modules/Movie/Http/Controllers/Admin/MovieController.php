<?php

namespace Modules\Movie\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;
use Modules\Movie\Entities\Movie;
use Modules\Movie\Http\Requests\MovieRequest;
use Modules\Movie\Services\MovieService;

class MovieController extends Controller
{
    public function index(): Response
    {
        $movies = Movie::all();

        return Inertia::render('Movies/Index', [
            'movies' => $movies
        ]);
    }

    public function update(MovieRequest $request, Movie $movie): RedirectResponse
    {
        (new MovieService())->update($movie, $request);
        session()->flash('success', __('movie.Movie updated successfully'));

        return to_route('admin.movies.index');
    }

    public function destroy(Movie $movie): Void
    {
        $movie->delete();
        session()->flash('success', __('movie.Movie deleted successfully'));
    }
}
