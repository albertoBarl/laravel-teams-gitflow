<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie as Movie;
use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenreRequest $request)
    {
        $form_data = $request->all();

        $newMovie = new Movie();
        $newMovie->title = $form_data['title'];
        $newMovie->original_title = $form_data['original_title'];
        // $newMovie->genre = $form_data['genre'];
        $newMovie->nationality = $form_data['nationality'];
        $newMovie->release_date = $form_data['release_date'];
        $newMovie->vote = $form_data['vote'];
        $newMovie->cast = $form_data['cast'];
        $newMovie->cover_path = $form_data['cover_path'];

        $newMovie->save();

        return redirect()->route('admin.movies.index', ['movie' => $newMovie->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);

        $item = [
            'item' => $movie
        ];

        return view('admin.movies.show', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('admin.movies.edit', compact('movie','genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenreRequest $request, Movie $movie)
    {
        $data = $request->validated();
        $slug = Movie::generateSlug($request->title, '-');
        $data['slug'] = $slug;

        $movie->update($data);
        return redirect()->route('movies.index')->with('message', $movie->title . ' è stato aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('message', $movie->title . ' è stato cancellato');
    }
}
