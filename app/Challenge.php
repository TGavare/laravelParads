<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{

    protected $fillable = [
        'title',
        'desc',
        'keywords',
        'date_start',
        'date_end',
        'image',
        'status'
    ];

    protected $primaryKey = 'id';
}
