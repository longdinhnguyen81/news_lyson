<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Advise extends Model
{
    protected $table = "advise";
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['name', 'phone'];
}
