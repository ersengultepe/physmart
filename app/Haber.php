<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Haber extends Model
{
    protected $table = 'haber';

    protected $fillable = [
        'title', 'slug', 'botlink', 'category_id', 'body', 'image', 'user_id', 'publish'
    ];

    public function getAuthor(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
