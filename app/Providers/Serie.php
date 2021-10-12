<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;

class   Serie extends Model {

    public $timestamps = false;
    protected $fillable = ['name'];

}
