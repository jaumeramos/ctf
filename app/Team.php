<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    public function flags()
    {
        return $this->belongsToMany('App\Flag')->withPivot('captured');
    }
}
