<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    protected $guarded = [
        
    ];

    public function iska()
    {
        return $this->belongsTo('App\user','Sid');
    }
}
