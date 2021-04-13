<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class api extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function medicine()
    {
        return $this->hasMany('App\Models\medicine', 'api_id','id');
    }
}
