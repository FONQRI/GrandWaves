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
  function insertPost(Request $request){
//      $messages = [
//          'name.required' => 'a',
//          'email.required' => 'a',
//          'email.email' => 'a',
//          'phonenumber.numeric' => 'a',
//          'phonenumber.regex' => 'a',
//          'phonenumber.required' => 'a',
//          'description.required' => 'a',
//          'description.max' => 'a',
//          'subject.required' => 'a',
//      ];
//      $rules = [
//          'name' => 'required',
//          'email' => 'required|email',
//          'description' => 'required|max:600',
//          'phonenumber' => 'required|numeric|regex:/^(0)[0-9]{10}$/',
//          'subject' => 'required|not_in:-1',
//      ];
      $postTitle=$request["postTitle"];
      $postContent=$request["postContent"];

      return redirect()->back()->withInput();
//      return view('blog/create');
  }
}
