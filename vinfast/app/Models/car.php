<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $table = 'car';
    protected $timestamp = false;

    public function type(){
    	return $this->belongsTo('App\Models\typecar', 'id_typecar', 'id');
    }
}
