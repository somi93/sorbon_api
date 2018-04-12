<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menu';
    protected $fillable = ['name', 'url'];
    public $timestamps = false;
}
