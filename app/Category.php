<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $timestamps = false;

    protected $fillable = ['title', 'slug'];

    public function getPosts(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    public function getHabers()
    {
        return $this->hasMany(Haber::class, 'category_id', 'id');
    }

    public function getSirkus()
    {
        return $this->hasMany(Sirku::class, 'category_id', 'id');
    }
}
