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
