<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
    protected $primaryKey = "id";
    public $timestamps = true;
    public $fillable = ['title', 'description', 'picture', 'detail', 'seat', 'ticket', 'hotel', 'plane', 'time', 'people', 'cost', 'recost'];
}
