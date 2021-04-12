<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::with('user')->get();
        return view('admin.books',['books'=>$books]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $book = new Books();
        $book->active = 1;
        $book->title = $request->book_name;
        $book->author = $request->author_name;
        $book->user_id = 1;
        $book->save();

        return $this->index();
    }
}
