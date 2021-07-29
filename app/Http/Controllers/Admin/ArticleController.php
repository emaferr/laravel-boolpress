<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc('id');
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([

            'image' => 'nullable | image | max: 2500',
            'title' => 'required | min:5 | max:100',
            'body' => 'required',
            'autor' => 'required | min:5 | max:150',
            'category_id' => 'nullable | exists:categories,id'
         
        ]);

        if(array_key_exists('image', $validate)){

            $file_path = Storage::put('article_images', $validate['image']);

            $validate['image'] = $file_path;

        }

        Article::create($validate);

        return redirect('admin/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('admin.articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validate = $request->validate([

            'image' => 'nullable | image | max: 2500',
            'title' => 'required | min:5 | max:100',
            'body' => 'required',
            'autor' => 'required | min:5 | max:150',
            
        ]);

        // $request->hasFile('image');

        if(array_key_exists('image', $validate)){

            Storage::delete($article->image);

            $file_path = Storage::put('article_images', $validate['image']);

            $validate['image'] = $file_path;

        }

        $article->update($validate);

        return redirect('admin/articles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('admin/articles');
    }
}
