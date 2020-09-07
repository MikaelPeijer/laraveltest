<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\blog;

class blogcontroller extends Controller
{
    public function show($slug)
    {
   
        $blog = DB::table('blog')->where('slug', $slug)->first();
    // $blog = blog::where('slug', $slug)->firstorfail();
        
    
         return  view('blog', [
            'blog' => $blog
         ]);
        
    }
}
