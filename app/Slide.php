<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['title1','title2','title3','btnTitle','btnHref','path','userId','date'];

    public function getAdded(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
