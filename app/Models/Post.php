<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];//Add a fillable property so Laravel allows mass assignment
    //Laravel protects models from unwanted data insertion
    //$fillable tells Laravel:
    //These fields are allowed to be inserted.
}
