<?php

namespace App;


class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
        
        // return $this->hasMany('\App\Comment');
    }

    public function addComment($body)
    {

     

       //add a comment to a post
        $this->comments()->create(compact('body'));
      
    }
    
    
}
//========================OLD CODE=====================
//protected $guarded = [];

// Comment::create([
//     'body' => request('body'),
//     'post_id' => $this->id
// ]);

// return $this->hasMany('\App\Comment');