<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function api()
    {
        return $this->belongsTo('App\Models\api');
    }

    public function fabric()
    {
        return $this->belongsTo('App\Models\fabric');
    }

}
