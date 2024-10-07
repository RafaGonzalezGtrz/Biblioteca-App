<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;
use Illuminate\support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $books=DB::table('library')
            ->select('id','nombre','descripcion', 'autor', 'categoria', 'editorial', 'ISBN')
            ->where('nombre','LIKE','%'.$texto.'%')
            ->orderBy('nombre','asc')
            ->paginate(5);
        return view('search', compact('books', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $book = new Libros;
        $book->nombre=$request->input('nombre');
        $book->descripcion=$request->input('descripcion');
        $book->autor=$request->input('autor');
        $book->categoria=$request->input('categoria');
        $book->editorial=$request->input('editorial');
        $book->ISBN=$request->input('ISBN');
        $book-> save();
        return redirect('upload');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $book = Libros::findOrFail($id);
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $book = Libros::findOrFail($id);
        $book->nombre=$request->input('nombre');
        $book->descripcion=$request->input('descripcion');
        $book->autor=$request->input('autor');
        $book->categoria=$request->input('categoria');
        $book->editorial=$request->input('editorial');
        $book->ISBN=$request->input('ISBN');
        $book-> save();
        return redirect()->route('search.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book=Libros::findOrFail($id);
        $book->delete();
        return redirect()->route('search.index');
    }
}
