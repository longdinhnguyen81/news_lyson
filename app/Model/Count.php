<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = ['author', 'page', 'day', 'month'];
}
