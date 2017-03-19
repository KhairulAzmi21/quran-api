<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    protected $table  = 'quran';
    protected $hidden = [
        'id',
        'surah_id',
        'created_at',
        'updated_at',
    ];
}
