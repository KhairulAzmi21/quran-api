<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    protected $table  = 'surah';
    protected $hidden = [
        'id',
        'rukus',
        'order',
        'ename',
        'created_at',
        'updated_at',
    ];

    public function quran()
    {
        return $this->belongsTo(Quran::class);
    }
}
