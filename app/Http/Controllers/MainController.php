<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $books = Books::where('active',1)->get();
        return view('welcome',['books'=>$books]);
    }

    /**
     * @param $method
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function openIndex($method){
        if($method == 'create'){
            $books = Books::where('active',1)->get();
            return view('addBook',['books'=>$books]);
        }elseif($method == 'return'){
            $books = Books::where('active',0)->get();
            return view('returnBook',['books'=>$books]);
        }
    }


    public function create(Request $request){
        $user = new User();
        $user->name = ($request->surname ?? '').' '.($request->name ?? '').' '.($request->username ?? '');
        $user->email = null;
        $user->password = Hash::make('Test1111');
        $user->save();

        $book = Books::where('id',$request->book_id)->first();
        $book->active = 0;
        $book->user_id = $user->id ?? 1;
        $book->save();
        return view('thank',['method'=>'create']);
    }


    public function update(Request $request){
        $book = Books::where('id',$request->book_id)->first();
        $book->active = 1;
        $book->user_id = 1;
        $book->save();
        return view('thank');
    }
}
