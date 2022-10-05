<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::search()->paginate(3);
        $param = [
            'books' => $books,
        ];
        return view('book.index', $param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required|min:6',
            'isbn' => 'required',
            'author' => 'required',
            'type' => 'required',
            'number_pages' => 'required',
            'year' => 'required',
        ]);
        $books = new Book();
        $books->name = $request->name;
        $books->isbn = $request->isbn;
        $books->author = $request->author;
        $books->type = $request->type;
        $books->number_pages = $request->number_pages;
        $books->year = $request->year;
        $books->save();
        $notification = [
            'message' => 'Added successfully!',
            'alert-type' => 'success'
        ];
        return redirect()->route('book.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:6',
            'isbn' => 'required',
            'author' => 'required',
            'type' => 'required',
            'number_pages' => 'required',
            'year' => 'required',
        ]);
        $books = Book::find($id);
        $books->name = $request->name;
        $books->isbn = $request->isbn;
        $books->author = $request->author;
        $books->type = $request->type;
        $books->number_pages = $request->number_pages;
        $books->year = $request->year;
        $books->save();
        $notification = [
            'message' => 'Edited successfully!',
            'alert-type' => 'success'
        ];
        return redirect()->route('book.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
    }
}

