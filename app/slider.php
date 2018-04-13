<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table='slider';
    protected $fillable = ['url', 'heading', 'title', 'subtitle', 'description'];
    public $timestamps = false;
}
