<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        //ligação entre categoria e post hasMany
        echo "    <a href='/'>Go back</a>";
        return $this->hasMany(Post::class);
    }
}
