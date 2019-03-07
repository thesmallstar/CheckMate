<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable = [
        'name', 'des', 'total','numq','status'
    ];

   

}
