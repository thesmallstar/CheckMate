<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable = [
        'name', 'des', 'total','numq','status','numP','numC','sp'
    ];
     
    public function questions()
    {

        return $this->hasmany('\App\question','paper_id');

    }
   
    public function results()
    {

        return $this->hasmany('\App\result','paper_id');

    }
   

}
