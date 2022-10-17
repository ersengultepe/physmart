<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hizmet extends Model
{
    protected $table = 'hizmet';

    protected $fillable = [
        'title', 'slug', 'body', 'image', 'user_id', 'publish'
    ];

    public function getAuthor(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
