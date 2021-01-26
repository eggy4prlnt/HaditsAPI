<?php

namespace App\Models;

use App\Models\Hadits;
use Illuminate\Database\Eloquent\Model;

class Kitab extends Model
{
    protected $table = 'kitab';
    protected $guarded = [];
    
    function hadits()
    {
        return $this->hasOne('\App\Models\Hadits');
    }
}