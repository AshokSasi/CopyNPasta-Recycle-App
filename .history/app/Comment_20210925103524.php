<?php

namespace App;

class Comment extends Model
{
    public function post(){
        return $this->belongsTo(Blog::class);
    }
}

//========================OLD CODE=====================