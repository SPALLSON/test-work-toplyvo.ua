<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fabric extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function medicines()
    {
        return $this->hasMany('App\Models\medicine', 'fabric_id','id');
    }
}
