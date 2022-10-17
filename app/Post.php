<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'title', 'slug', 'body', 'image', 'botlink','category_id', 'user_id', 'publish', 'lang'
    ];

    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getAuthor(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
