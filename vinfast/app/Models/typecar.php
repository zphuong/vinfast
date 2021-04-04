<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typecar extends Model
{
    protected $table = 'typecar';
    protected $timestamp = false;

    public function xe(){
    	return $this->hasMany('App\Models\car', 'id_typecar', 'id');
    }
}
