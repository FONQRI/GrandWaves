<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
class ArticlesController extends Controller
{
  function index(){
    $articles = Article::all();
    return view('blog/blog',compact('articles'));
  }
  function show($id){
    $article = Article::findOrFail($id);
    if (is_null($article)) {
      abort(404);
      }
    return view('blog/post',compact('article'));
  }

  function create(){

    return view('blog/create');
  }
}
