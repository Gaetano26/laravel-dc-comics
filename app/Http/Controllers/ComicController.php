<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route('home')->with('message', "Fumetto con nome {$newComic->title} è stato salvato con successo");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show(Comic $comic)
    {


        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        //dd($form_data);
        $comic->update($form_data);
        return redirect()->route('home', $comic->id)->with('message', "Fumetto con nome {$comic->title} è stato modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('home')->with('message', "Fumetto con nome {$comic->title} cancellato con successo !");
    }
}
