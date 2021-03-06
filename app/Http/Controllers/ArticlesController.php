<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //renders a list
public function index(){

    if (request('tag')){
        $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
    } else {
    $articles = Article::latest()->get();
    }
    return view('articles.index', ['articles' => $articles]);
}




//shows a single recourse
    public function show(Article $article)
    {
  // $article = Article::findorfail($id);
   return view('articles.show', ['article' => $article]);
    }


public function create(){


    return view('articles.create', [
'tags' => tag::all() 
    ]);
}
   //shows a view to create a new resource

public function store()
{

    $article= new article(request(['title', 'excerpt','body']));
    $article->user_id = 1;
    $article->save();

    $article->tags()->attach(request('tags'));

    return redirect('/articles');


    //persist the new resource
}
public function edit( $id   )//Article $article
{

    $article = Article::find($id);


    return view('articles.edit', ['article'=>$article ]);
    
// show a view to edit an existing resource
}
public function update(Article $article)
{
    $article->update($this->validateArticle());
    //$article = Article::find($id);
    
  
    return redirect('/articles/' . $article->id);

// persist the edited resource
}
public function validateArticle()
{
    return request()->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required',
        'tags' => 'exists:tags,id'
     ]);
}





public function destroy($id)
{
$article= article::findOrFail($id);
$article->delete();
return redirect('/articles')->with('succes', 'post removed');
}









}


