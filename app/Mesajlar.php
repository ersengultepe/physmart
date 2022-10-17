<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesajlar extends Model
{
    protected $table = 'mesajlar';
    protected $fillable = [
        'ad_soyad',
        'telefon',
        'email',
        'mesaj'
    ];

    protected $hidden = [
        'ad_soyad',
        'telefon',
        'email',
        'mesaj'
    ];
}
