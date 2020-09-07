<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\post;

class postcontroller extends Controller
{
   public function show($slug) 
   {

     $post = post::where('slug', $slug)->firstorfail();

        return view('post', [
        'post' => $post 
        ]);
    
  
        }
}
