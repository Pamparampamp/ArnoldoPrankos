<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
     public function index()
    {
        //
            return view('authors.index', ['authors' => Author::orderby('name')->get() ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $author = new Author();
        // can be used for seeing the insides of the incoming request
        // dd($request->all()); die();
        $author->fill($request->all());
        $author->save();
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\author  $horse
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\author  $horse
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
        return view('authors.edit',['author'=>$author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\author  $horse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
        $request->validate([]);
        $author->update($request->all());
        return redirect()->route('authors.index')
        ->with('success', 'author updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\author  $horse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
            $author->delete();
            return redirect()->route('authors.index')
            ->with('success', 'author deleted successfully');
    }
}
