<?php

namespace App\Models;

use App\Models\Kitab;
use Illuminate\Database\Eloquent\Model;

class Hadits extends Model
{
    protected $table = 'hadits';
    protected $guarded = [];

    function kitab()
    {
        return $this->belongsTo('\App\Models\Kitab');
    }

}