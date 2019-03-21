<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['name', 'email', 'title', 'message'];
}
