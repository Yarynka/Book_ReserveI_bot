<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Telegram\Bot\Laravel\Facades\Telegram;

class MainController extends Controller
{
    public function index(){
        $books = Books::where('active',1)->get();
        return view('welcome',['books'=>$books]);
    }
    public function openIndex($method){
        if($method == 'create'){
            $books = Books::where('active',1)->get();
            return view('addBook',['books'=>$books]);
        }elseif($method == 'return'){
            $books = Books::where('active',0)->get();
            return view('returnBook',['books'=>$books]);
        }
    }

    public function create(){

        return view('thank',['method'=>'create']);
    }

    public function update(){

        return view('thank');
    }
}
