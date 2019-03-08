<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $guarded = [
        
    ];


    public function keywords()
    {

        return $this->hasmany('\App\keyword','question_id');

    }
}
