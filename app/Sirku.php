<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sirku extends Model
{
    protected $table = 'sirku';

    protected $fillable = [
        'title', 'slug', 'body', 'botlink', 'category_id', 'user_id', 'publish'
    ];

    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getAuthor(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
