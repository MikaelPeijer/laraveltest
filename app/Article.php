<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  //  public function GetRouteKeyName()
   // {
        //return 'slug' ;
   // }
   protected $guarded = []; 



   public function author()
   {

     return $this->belongsTo(User::class, 'user_id');

   }

   public function tags()
   {
     return $this->belongstomany(tag::class);
   }
}
