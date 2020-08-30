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
        'category_id',
        'user_id',
        'status'
    ];

    protected $primaryKey = 'id';
}
