<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    protected $fillable = ['link','price','description','created_at','updated_at','deleted_at'];
}
