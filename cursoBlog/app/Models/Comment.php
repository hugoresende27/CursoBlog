<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //para este erro : Add [user_id] to fillable property to allow mass assignment on [App\Models\Comment].
    //protected $guarded = [];

    ///////////////////////////////////////////////
    public function post()
    {
        return $this->belongsTo(Post::class);   //usar o default
    }
    ///////////////////////////////////////////////
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
