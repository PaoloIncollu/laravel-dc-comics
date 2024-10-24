<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::get();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.comic
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|min:3|max:64',
            'description' => 'required|min:10|max:5000',
            'thumb' => 'nullable|max:1024|url',
            'price' => 'required|decimal:2',
            'series' => 'required|min:3|max:255',
            'sale_date' => 'nullable|date|',
            'type' => 'required|min:3|max:16',
            'artists' => 'required|min:3|max:255',
            'writers' => 'required|min:3|max:255',
        ]);

        $data = $request->all();

        $comic = new Comic();
        $comic->thumb = $data['thumb'];
        $comic->title = $data['title'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];
        $comic->price = $data['price'];
        $comic->description = $data['description'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([

            'title' => 'required|min:3|max:64',
            'description' => 'required|min:10|max:5000',
            'thumb' => 'nullable|max:1024|url',
            'price' => 'required|decimal:2',
            'series' => 'required|min:3|max:255',
            'sale_date' => 'nullable|date',
            'type' => 'required|min:3|max:16',
            'artists' => 'required|min:3|max:255',
            'writers' => 'required|min:3|max:255',
        ]);


        $data = $request->all();

        $comic->thumb = $data['thumb'];
        $comic->title = $data['title'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];
        $comic->price = $data['price'];
        $comic->description = $data['description'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
