<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function home(Request $request){
        $search = $request->get('search');
        $data = Book::with('Author')->Search($search)->orderBy('id','desc')->paginate(20);
        return view("layout", compact('data'));
    }
}
