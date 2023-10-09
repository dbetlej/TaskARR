<?php

namespace Modules\Movie\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Modules\Movie\Entities\Movie;
use Modules\Movie\Http\Requests\MovieRequest;
use Modules\Movie\Services\MovieService;

class MovieController extends Controller
{
    public function index(): View
    {
        $movies = Movie::all();

        return view('admin.movie.show', compact('movies'));
    }

    public function update(MovieRequest $request, Movie $movie): RedirectResponse
    {
        (new MovieService())->update($movie, $request);
        session()->flash('success', __('movie.Movie updated successfully'));

        return redirect()->route('admin.movies.index');
    }

    public function destroy(Movie $movie): Void
    {
        $movie->delete();
        session()->flash('success', __('movie.Movie deleted successfully'));
    }
}
