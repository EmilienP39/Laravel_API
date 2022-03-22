<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'path'];
    use HasFactory;
    public function partner(){
        return $this->hasOne(\App\Models\Partner::class);
    }

}
