<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show data
        $book = Books::all();
        return view('books.index',['book'=>$book ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new data
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request,[
            'title'=>'required',
            'author'=>'required',
        ]);

        //create new data
        $books = new books;
        $books->title = $request->title;
        $books->author = $request->author;
        $books->save();
        return redirect()->route('books.index')->with('alert-success','Data has been saved correctly');

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
        $books = Books::findOrFail($id);
        //return to edit view
        return view('books.edit', compact('books'));
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
        //validation
        $this->validate($request,[
            'title'=>'required',
            'author'=>'required',
        ]);
        //update data
        $books = Books::findOrFail($id);
        $books->title = $request->title;
        $books->author = $request->author;
        $books->save();
        return redirect()->route('books.index')->with('alert-success','Data has been Edited correctly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Data
        $books = Books::findOrFail($id);
        $books->delete();
        return redirect()->route('books.index')->with('alert-success','Data has been DELETED correctly');
    }
}
