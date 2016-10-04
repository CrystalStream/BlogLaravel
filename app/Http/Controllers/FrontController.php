<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Category;
use App\Tag;
use Carbon\Carbon;


class FrontController extends Controller
{

	public function __construct(){
		Carbon::setLocale('es');
	}

    public function index(){
    	$articles = Article::orderBy('id','DESC')->get();
    	return view('front.index',compact('articles'));
    }

    public function searchCategory($name){
    	$category = Category::SearchCategory($name)->first();
    	$articles = $category->articles;
    	return view('front.index',compact('articles'));
    }

    public function searchTag($name){
    	$tag = Tag::SearchTag($name)->first();
    	$articles = $tag->articles;
    	return view('front.index',compact('articles'));
    }

    public function viewArticle($slug){
    	$article = Article::findBySlugOrFail($slug);
    	return view('front.view', compact('article'));
    }
}
