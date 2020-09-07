<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::get('/', function () {
    return  view('welcome');
});

route::get('/contact', function () {
    return  view('contact');
});

route::get('/about', function () {
    $articles = App\Article::take(3)->latest()->get( );

   
    return  view('about',[
        'articles' => $articles
    ]
);
    
});
route::get('/articles', 'ArticlesController@index');
route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/create', 'ArticlesController@update');





route::get('/test', function () {
    $name = request('name');

    return view ('test', [
    'name' => $name
    ]);

});

Route::get('/posts/{post}', function ($post) {
    $posts = [
        'My-first-post'=> 'Hello, this is my first blog post!',
        'my-second-post' => 'Now i am gettin the hang of this blogging thing.'
    ];

     return  view('post', [
        'post' => $posts[$post] 
     ]);
    });

    
route::get('/blogs/{blog}', 'blogcontroller@show');



Auth::routes();

Route::get('/home', 'HomeController@index')
->name('home')
->middleware('auth');
