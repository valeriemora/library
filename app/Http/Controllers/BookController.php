<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BookController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */


  public function index()
  {
    $books= Book::all();
    return view('books.index',compact('books'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
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
    $book = new Book();

    $book->name = $request->input('name');
    $book->author = $request->input('author');
    $book->category_id = $request->input('category_id');
    $book->published = $request->input('published');
    $book->user = $request->input('user');
    $book->status = 1;

    $book->save();

    return redirect ('books/');
  }


  /**
  * Display the specified resource.
  *
  * @param  \App\Book  $book
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $book = Book::find($id);
    return view('books.show', compact('book'));
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Book  $book
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $book = Book::find($id);
    return view('books.edit', compact('book'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Book  $book
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    $book = Book::find($request->input('id'));
    $book->name = $request->input('name');
    $book->author = $request->input('author');
    $book->category_id = $request->input('category_id');
    $book->published = $request->input('published');
    $book->user = $request->input('user');
    $book->save();
    return redirect ('books/');
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Book  $book
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $book =Book::find($id);
    $book->delete();
    return redirect ('books/');
  }

}
