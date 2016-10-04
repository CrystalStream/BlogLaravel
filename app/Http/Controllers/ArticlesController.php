<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Article;
use App\Image;
use App\Tag;
use Redirect;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        });       
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        $tags = Tag::pluck('name','id');
        return view('admin.articles.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        if ( $request->file('image') ){
            $file = $request->file('image');
            $name = "blog_".time().".".$file->getClientOriginalExtension();
            $path = public_path()."/img/articles/";
             // 1ºparam = url, 2ºparam = name
            $file->move($path,$name);
        }
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();
        $article->tags()->sync($request->tag_id);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        return Redirect::to('admin/articles');
       
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
        $categories = Category::pluck('name','id');
        $tags = Tag::pluck('name','id');
        $article = Article::find($id);
        $my_tags = $article->tags->pluck('id')->toArray();       
        return view('admin.articles.edit',compact('categories','tags','article','my_tags'));
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
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        $article->tags()->sync($request->tag_id);

        return Redirect::to('admin/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return Redirect::to('admin/articles');
    }
}
