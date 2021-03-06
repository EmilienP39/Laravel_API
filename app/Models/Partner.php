<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public $timestamps = false;

    use HasFactory;

    public function picture(){
        return $this->belongsTo(\App\Models\Picture::class);
    }
}
