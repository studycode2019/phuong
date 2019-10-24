<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhadautu extends Model
{
    protected $table = 'nhadautu';

    public $timestamp = false;

    public function bds()
    {
        return $this->hasMany('App\bds');
    }
}
