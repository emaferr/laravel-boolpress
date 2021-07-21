<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $articles = Article::all();
        return view('admin.home',compact('articles'));
    }

}
