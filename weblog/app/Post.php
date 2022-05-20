<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'created_at',
        'updated_at',
        'title',
        'description',
        'content',
    ];
}
