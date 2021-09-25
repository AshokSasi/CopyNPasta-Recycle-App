<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
        
        
    }

    public function addComment($body)
    {
 
        $this->comments()->create(compact('body'));
      
    }
}
