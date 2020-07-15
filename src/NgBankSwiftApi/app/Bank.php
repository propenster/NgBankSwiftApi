<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'bank',
        'city',
        'branch',
        'swift_code',
        'sort_code'
    ];
}
