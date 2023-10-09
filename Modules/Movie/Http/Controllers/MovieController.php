<?php

namespace Modules\Movie\Http\Controllers;

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
        $movies = Movie::owned()->get();

        return view('movie.show', compact('movies'));
    }

    public function create(): View
    {
        return view('movie.create');
    }

    public function store(MovieRequest $request): RedirectResponse
    {
        $movie = Movie::create($request->safe()->except('vod') + ['creator_id' => auth()->user()->id()]);
        if ($movie) {
            $movie->vod->sync($request->safe()->only('vod'));
            session()->flash('success', __('movie.Movie updated successfully'));
        } else {
            session()->flash('error', __('movie.Error while creating movie. Try again after few seconds.'));
        }

        return redirect()->route('movies.index');
    }

    public function show(Movie $movie): View|RedirectResponse
    {
        if ($movie->creator->id != auth()->user()->id) {
            session()->flash('error', __('movie.You do not have permission to view this movie'));
            return redirect()->route('movies.index');
        }

        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie): View|RedirectResponse
    {
        if ($movie->creator->id != auth()->user()->id) {
            session()->flash('error', __('movie.You do not have permission to edit this movie'));
            return redirect()->route('movies.index');
        }

        return view('movie.edit', compact('movie'));
    }

    public function update(MovieRequest $request, Movie $movie): RedirectResponse
    {
        if ($movie->creator->id == auth()->user()->id) {
            (new MovieService())->update($movie, $request);
            session()->flash('success', __('movie.Movie updated successfully'));
        } else {
            session()->flash('error', __('movie.You do not have permission to update this movie'));
        }

        return redirect()->route('movies.index');
    }

    public function destroy(Movie $movie): Void
    {
        if ($movie->creator->id == auth()->user()->id) {
            $movie->delete();
            session()->flash('success', __('movie.Movie deleted successfully'));
        } else {
            session()->flash('error', __('movie.You do not have permission to delete this movie'));
        }
    }
}
